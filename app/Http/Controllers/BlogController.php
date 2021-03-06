<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Settings;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        $blogs = Blog::with('blogDetail')->orderBy('id', 'desc')->paginate(8);
        $categories = BlogCategory::inRandomOrder()->limit(12)->get();
        return view('blog-list', [
            'settings'   => $settings,
            'blogs'      => $blogs,
            'categories' => $categories,
        ]);
    }

    public function show($slug)
    {
        $settings = Settings::first();
        $blogDetail = Blog::with('authorDetail')->where('slug', $slug)->first();
        $categories = BlogCategory::inRandomOrder()->limit(5)->get();
        $blogs = Blog::orderBy('id', 'desc')->limit(4)->get();
        if (!$blogDetail) {
            return abort(404);
        }
        return view('blog-detail', [
            'settings'      => $settings,
            'blogDetail'    => $blogDetail,
            'categories'    => $categories,
            'blogs'         => $blogs,
        ]);
    }
}
