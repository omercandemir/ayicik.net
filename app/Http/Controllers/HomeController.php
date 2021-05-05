<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class HomeController extends Controller
{
    public function index()
    {
        $features = Features::get();
        return view('homepage', [
            'features'  => $features,
        ]);
    }
}
