<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\V1\UploadResource;

use App\Http\Requests\V1\UploadStoreRequest;

use App\Models\Upload;

use Validator;
use Storage;
use Str;
use DB;

class UploadController extends Controller
{
	public function store(UploadStoreRequest $request)
	{
		$directory = implode('/', str_split(Str::random(40), 2));
		$file_name = time().'.'.$request->file('content')->extension();

		Storage::disk('uploads')->putFileAs($directory, $request->content, $file_name);

		$upload = Upload::create([
			'name' => $request->file('content')->getClientOriginalName(),
			'src' => 'uploads/'.$directory.'/'.$file_name,
			'size' => $request->file('content')->getSize(),
			'hash' => sha1_file($request->file('content'))
		]);

		return new UploadResource($upload);
	}
}
