<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;
use App\Models\Who;

class HomeController extends Controller
{
    public function index()
    {
        $features = Features::get();
        $whos = Who::get();
        return view('homepage', [
            'features'  => $features,
            'whos'      => $whos,
        ]);
    }
}
