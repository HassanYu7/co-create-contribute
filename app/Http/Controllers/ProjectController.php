<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectStoreRequest;
use App\Models\Project;
use App\Models\Technology; // Update this line
use App\Services\ProjectService; // Add this line
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RequestedContribution;

class ProjectController extends Controller
{


    public function create()
    {
        $technologies = Technology::all();
        return view('projects.create', compact('technologies'));
    }

    public function store(ProjectStoreRequest $request) 
    {
        (new ProjectService())->createProject($request->validated());
        return redirect()->route('projects.create')->with('success', 'Project created successfully!');
    }
}
