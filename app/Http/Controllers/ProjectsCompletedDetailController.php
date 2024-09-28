<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsCompletedDetailController extends Controller
{
    public function index()
    {
        return view('projects.completed.detail.index');
    }
}
