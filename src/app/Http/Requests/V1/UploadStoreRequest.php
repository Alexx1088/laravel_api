<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UploadStoreRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'content' => [
				'required',
				'file',
				'max:'.(env('FILE_UPLOAD_SIZE') ? env('FILE_UPLOAD_SIZE') * 1024 : 10)
			]
		];
	}

	public function failedValidation(Validator $validator) 
	{
		throw new HttpResponseException(response()->json([
			'errors' => $validator->errors()
		], 422));
	}
}