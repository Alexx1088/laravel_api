<?php

namespace App\Services\V1;

use App\Models\Project;

use DB;

class ProjectService
{
    public function store($request)
    {
        return DB::transaction(function () use ($request){
            return Project::create($request->validated());
        });
    }

    public function update($request, $project)
    {
        return DB::transaction(function () use ($request, $project){
            $project->update($request->validated());
        });
    }

    public function destroy($project)
    {
        return DB::transaction(function () use ($project){
            $project->destroy();
        });
    }
}

?>
