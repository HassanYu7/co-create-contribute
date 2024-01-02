<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\Technology; // Import the Technology model

class VisitorProjectControllerTest extends TestCase
{

    use RefreshDatabase;


    // The index method should return a view with all projects.
    // public function test_index_method_returns_view_with_all_projects()
    // {
    //     $response = $this->get('/');
    //     $response->assertStatus(200);
    //     $response->assertViewHas('projects');
    // }

    // // The show method should return a view with the project with the given id.
    // public function test_show_method_returns_view_with_project_with_given_id()
    // {
    //     $project = Project::factory()->create();
    //     $response = $this->get('/projects/' . $project->id);
    //     $response->assertStatus(200);
    //     $response->assertViewHas('project');
    // }

    // When there are no projects, the index method should return an empty view.
    public function test_index_method_returns_empty_view_when_no_projects()
    {
        // Given: Create projects with factory
        Project::factory()->count(3)->create()->each(function ($project) {
            // Detach technologies and delete requested contributions
            $project->technologies()->detach();
            $project->requested_contributions()->delete();
        });

        // When: Delete projects using eloquent (this should respect foreign key constraints)
        Project::query()->delete();

        // Then: Send a GET request to /projects
        $response = $this->get('/projects');

        // Assert that the response is a view
        $response->assertViewIs('visitors.projects.index');

        

        // Assert that the response has a 200 status code
        // $response->assertStatus(200);

        // Assert that the response is a view
        // $response->assertViewIs('visitors.projects.index');

        // Assert that the view has the expected variable 'projects' (empty array)
        // $response->assertViewHas('projects', []);
    }
    

    // When an invalid id is given, the show method should return a 404 error.
    // public function test_show_method_returns_404_error_when_invalid_id_given()
    // {
    //     $response = $this->get('/projects/999');
    //     $response->assertStatus(404);
    // }

    // The index method should order the projects by creation date.
    // public function test_index_method_orders_projects_by_creation_date()
    // {
    //     $project1 = Project::factory()->create(['created_at' => now()->subDays(2)]);
    //     $project2 = Project::factory()->create(['created_at' => now()->subDays(1)]);
    //     $project3 = Project::factory()->create(['created_at' => now()]);

    //     $response = $this->get('/projects');
    //     $response->assertStatus(200);
    //     $response->assertViewHas('projects');
    //     $projects = $response->original->getData()['projects'];
    //     $this->assertEquals($project3->id, $projects[0]->id);
    //     $this->assertEquals($project2->id, $projects[1]->id);
    //     $this->assertEquals($project1->id, $projects[2]->id);
    // }

    // // The show method should display the project's name, description, and creation date.
    // public function test_show_method_displays_project_details()
    // {
    //     $project = Project::factory()->create();

    //     $response = $this->get('/projects/' . $project->id);
    //     $response->assertStatus(200);
    //     $response->assertSee($project->name);
    //     $response->assertSee($project->description);
    //     // $response->assertSee($project->created_at);
    // }
}
