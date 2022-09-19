<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\ProjectStoreRequest;
use App\Http\Resources\V1\ProjectResource;
use App\Models\Project;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json(ProjectResource::collection(Project::all()), 200);
    }

    public function show(Project $project)
    {
     //   return new ProjectResource(Project::findOrFail($project));
   //  return new ProjectResource($project);
    }

    public function store(ProjectStoreRequest $request)
    {

        Project::create($request->validated());


        return response()->json(ProjectResource::collection(Project::all()), 201);

    }

    public function update(ProjectStoreRequest $request, Project $project)
    {
        $project->update($request->validated());

        return new ProjectResource($project);

    }

    public function destroy(Project $project/*, ProjectStoreRequest $request*/)
    {
        $project->delete();

         return response()->json(null, 204);
    }
}
