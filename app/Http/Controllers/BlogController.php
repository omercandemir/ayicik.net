<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Settings;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(8);
        return 'bloglar sayfası';
    }

    public function show($slug)
    {
        $settings = Settings::first();
        $blogDetail = Blog::with('authorDetail')->where('slug', $slug)->first();
        if (!$blogDetail) {
            return abort(404);
        }
        return view('blog-detail', [
            'settings'      => $settings,
            'blogDetail'    => $blogDetail,
        ]);
    }
}
