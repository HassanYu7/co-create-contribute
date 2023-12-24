<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class VisitorProjectController extends Controller
{


    public function index(){
        $projects = Project::all();
        return view('visitors.projects.index', compact('projects'));
    }
    
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('visitors.projects.show', compact('project'));
    }

    
}
