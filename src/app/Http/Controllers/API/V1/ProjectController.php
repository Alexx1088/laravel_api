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

	}

	public function show()
	{

	}

	public function store(ProjectStoreRequest $request)
	{
        $created_project = Project::create($request->validated());

        return new ProjectResource($created_project);

			}

	public function update()
	{

	}

	public function destroy()
	{

	}
}
