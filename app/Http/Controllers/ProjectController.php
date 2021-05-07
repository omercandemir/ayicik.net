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

    public function show($slug)
    {
        $settings = Settings::first();
        $projectDetail = Project::with('authorDetail')->where('slug', $slug)->first();
        $categories = ProjectCategory::inRandomOrder()->limit(5)->get();
        $projects = Project::orderBy('id', 'desc')->limit(4)->get();
        if (!$projectDetail) {
            return abort(404);
        }
        return view('project-detail', [
            'settings'  => $settings,
            'projectDetail' => $projectDetail,
            'categories'    => $categories,
            'projects'      => $projects,
        ]);
    }
}
