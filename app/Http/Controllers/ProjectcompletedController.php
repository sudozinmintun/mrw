<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectList;
use Illuminate\Http\Request;

class ProjectcompletedController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->status;
        $projects = Project::where('status', $status)->get();
        $all_projects = Project::all();
        return view('projects.completed.index', compact('projects', 'all_projects'));
    }
    

    public function listProjects(Request $request)
    {
        $project_lists = ProjectList::all();
        return view('projects.list_projects', compact('project_lists'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $all_projects = Project::all();
        return view('projects.completed.show', compact('project', 'all_projects'));
    }
}
