<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

use App\Http\Requests\V1\ProjectStoreRequest;
use App\Http\Requests\V1\ProjectUpdateRequest;

use App\Http\Resources\V1\ProjectResource;

use App\Repositories\V1\RoleRepository;
use App\Services\V1\ProjectService;

use App\Models\Project;
use App\Services\V1\RoleService;

class ProjectController extends Controller
{
    protected $service;

    public function __construct(ProjectService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return response()->json(ProjectResource::collection(Project::all()), 200);
    }

    public function show(Project $project)
    {
        return new ProjectResource($project);
    }

    public function store(ProjectStoreRequest $request)
    {
        $project = $this->service->store($request);

        return response()->json(new ProjectResource($project), 201);
    }

    public function update(ProjectStoreRequest $request, Project $project)
    {
        $this->service->update($request, $project);

        return new ProjectResource($project);
    }

    public function destroy(Project $project)
    {
        $this->service->destroy($project);

        return response()->json(null, 204);
    }
}
