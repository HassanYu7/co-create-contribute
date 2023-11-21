<?php

namespace App\Services;
use App\Models\Project;

class ProjectService 
{

    public function createProject($data) 
    {
        $project = Project::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'github_link' => $data['github_link'],
            'user_id' => auth()->id(),
        ]);

        $project->technologies()->attach($data['technologies']);

        $project->requested_contributions()->create([
            'user_id' => auth()->id(),
            'role' => implode(',', $data['contributors']),
            'description' => 'Desired Contributors for the project',
        ]);

        return $project;
    }
}
