<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Role;
use App\Services\ProjectService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestedContribution;

class ProjectController extends Controller
{


    public function create()
    {
        $technologies = Technology::all();
        $roles = Role::all();
        return view('projects.create', compact('technologies', 'roles'));
    }

    public function store(ProjectStoreRequest $request)
    {
        (new ProjectService())->createProject($request->validated());
        return redirect()->route('projects.create')->with('success', 'Project created successfully!');
    }



    public function edit(Project $project)
    {
        $technologies = Technology::all();

        return view('projects.edit', compact('project', 'technologies'));
    }
    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'github_link' => 'required',
            // 'contributors' => 'required|array',
            'contributions_description' => 'required',
            // 'technologies' => 'required|array',
            // 'technologies.*' => 'exists:technologies,id', // Ensure all technology IDs exist

        ]);

        // Update main project details
        $project->update($data);
        $project->requested_contributions()->attach($data['contributors']);

        // $project->technologies()->sync($data['technologies']);


        return redirect()->back()->with('success', 'Project updated successfully!');
    }
}
