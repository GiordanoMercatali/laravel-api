<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller {

    public function index(){
        
        // $projects = Project::with('type');
        $projects = Project::all();

        return response()->json([
            'results' => $projects,
            'success' => true
        ]);
    }

    public function show(string $slug)
    {
        $project = Project::all()->where('slug', $slug);

        return response()->json([
            'results' => $project,
            'success' => true
        ]);
    }
}