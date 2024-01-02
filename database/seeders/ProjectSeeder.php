<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $projects = [];

        // for ($i = 1; $i <= 30; $i++){
        //     $projects[] = [
        //         'user_id' => 1, 
        //         'title' => 'Project ' . $i,
        //         'description' => 'Description for Project ' . $i,
        //         'github_link' => 'https://github.com/project' . $i,
        //     ];
        // }

        // foreach($projects as $projectData){
        //     Project::create($projectData);
        // }

        Project::factory()->count(15)->create();

     
    }
}
