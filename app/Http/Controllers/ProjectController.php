<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Project;
use App\Models\ProjectCategory;

class ProjectController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        $projects = Project::with('projectCategory')->orderBy('id', 'desc')->paginate(8);
        $categories = ProjectCategory::inRandomOrder()->get();
        return view('project-list', [
            'settings'   => $settings,
            'projects'   => $projects,
            'categories' => $categories,
        ]);
    }
}
