<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        $projects = Projects::with('projectCategory')->orderBy('id', 'desc')->paginate(8);
        return view('project-list', [
            'settings'  => $settings,
            'projects'  => $projects,
        ])
    }
}
