<?php

namespace App\Repositories\V1;

use App\Models\Project;

class ProjectRepository
{
    public function all()
    {
    	$projects = Project::query();

        $projects = $projects->get();

        return $projects;
    }

    public function paginate($request)
    {
        $projects = Project::query();

        if ($request->has('filter.slug')) {
            $projects->where('slug', $request->filter['slug']);
        }

        $projects = $projects->paginate();

        return $projects;
    }
}
