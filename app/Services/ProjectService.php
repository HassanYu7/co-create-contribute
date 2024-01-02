<?php

namespace App\Services;

use App\Models\Project;

class ProjectService
{

    public function createProject($data)
    {
        $project = Project::create([
            'title' => $data['title'],
            'description' => $data['project_description'],
            'github_link' => $data['github_link'],
            'user_id' => auth()->id(),
        ]);

        $project->technologies()->attach($data['technologies']);

        $requestedContribution = $project->requested_contributions()->create([
            'user_id' => auth()->id(),
            'project_id' => $project->id,
            'description' => $data['contributions_description'],

        ]);

        $requestedContribution->roles()->attach($data['contributors']);
        return $project;
    }




    public function updateProject($data)
    {
        $project = Project::find($data['id']);
    
        if ($project) {
            info('Update data:', ['data' => $data]); // Pass the data as an array
    
            $updateData = [
                'title' => $data['title'],
                'github_link' => $data['github_link'],
                'description' => $data['project_description'] ?? '', // Set a default value if project_description is null
            ];
    
            $updateResult = $project->update($updateData);
    
            info('Update result:', ['result' => $updateResult]); // Pass the result as an array
            
            return $updateResult;
        }
        return false;
    }
    
    
}
