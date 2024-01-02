<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /* 
            'user_id' => 1, 
                'title' => 'Project ' . $i,
                'description' => 'Description for Project ' . $i,
                'github_link' => 'https://github.com/project' . $i,
    */
    protected $model = Project::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // This will associate the project with a user
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'github_link' => $this->faker->url,
        ];
    }
}
