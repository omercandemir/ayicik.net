<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\BlogCategory;
use App\Models\ProjectCategory;
use App\Models\Blog;
use App\Models\Project;

class CategoryController extends Controller
{
    public function showBlog($slug)
    {
        $settings = Settings::first();
        $blogCategories = BlogCategory::where('slug', $slug)->first();
        $categories = Blog::with('blogDetail')->where('category', $blogCategories->id)->paginate(12);
        $getCategory = BlogCategory::get();
        if (!$blogCategories) {
            return abort(404);
        }
        return view('blog-category', [
            'settings'   => $settings,
            'categories' => $categories,
            'blogCategories' => $blogCategories,
            'getCategory'    => $getCategory,
        ]);
        
    }

    public function showProject($slug)
    {
        $settings = Settings::first();
        $projectCategories = ProjectCategory::where('slug', $slug)->first();
        $categories = Project::where('category', $projectCategories->id)->get();

        if (!$projectCategories) {
            return abort(404);
        }
        return view('category-detail', [
            'settings'   => $settings,
            'categories' => $categories,
        ]);
    }
}
