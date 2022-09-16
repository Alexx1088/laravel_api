<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProjectStoreRequest;

class ProjectController extends Controller
{
	public function index()
	{

	}

	public function show()
	{

	}

	public function store()
	{



	//	$user = User::create($request->validated());

		return response()->json(201);
	}

	public function update()
	{
		/*$user->update($request->validated());

		return new UserResource($user);*/
	}

	public function destroy()
	{
	/*	$user->delete();

		return response()->json(null, 204);*/
	}
}
