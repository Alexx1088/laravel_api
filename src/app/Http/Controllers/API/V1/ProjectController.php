<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;

use App\Repositories\V1\ProjectRepository;

use App\Http\Requests\V1\ProjectStoreRequest;
use App\Http\Requests\V1\ProjectUpdateRequest;

use App\Http\Resources\V1\ProjectResource;

use App\Repositories\V1\RoleRepository;
use App\Services\V1\ProjectService;

use App\Models\Project;
use App\Services\V1\RoleService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    protected $repository;
    protected $service;

    public function __construct(ProjectService $service, ProjectRepository $repository)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $projects = $this->repository->paginate($request);

        return ProjectResource::collection($projects);
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

    public function update(ProjectUpdateRequest $request, Project $project)
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
