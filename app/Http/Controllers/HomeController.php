<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;
use App\Models\Who;
use App\Models\Feedback;
use App\Models\Blog;
use App\Models\Settings;

class HomeController extends Controller
{
    public function index()
    {
        $features = Features::get();
        $whos = Who::get();
        $feedbacks = Feedback::orderBy('id', 'desc')->limit(9)->get();
        $blogs = Blog::with('authorDetail')->orderBy('id', 'desc')->limit(3)->get();
        $settings = Settings::first();
        return view('homepage', [
            'features'  => $features,
            'whos'      => $whos,
            'feedbacks' => $feedbacks,
            'blogs'     => $blogs,
            'settings'  => $settings,
        ]);
    }
}
