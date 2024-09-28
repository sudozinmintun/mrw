<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use App\Models\Project;
use App\Models\Service;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $all_projects = Project::all();
        $services = Service::all();
        $activities = Activities::all();
        $products = Product::all();
        return view('welcome', compact('all_projects', 'services', 'activities', 'products'));
    }
}
