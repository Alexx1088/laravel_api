<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProjectStoreRequest;
use App\Http\Resources\V1\ProjectResource;
use App\Models\Project;

class ProjectController extends Controller
{
	public function index()
	{
return response()->json(ProjectResource::collection(Project::all()), 200);
	}

	public function show()
	{

	}

	public function store(ProjectStoreRequest $request)
	{

  Project::create($request->validated());

        return response()->json(ProjectResource::collection(Project::all()), 201);

      			}

	public function update()
	{

	}

	public function destroy()
	{

	}
}
