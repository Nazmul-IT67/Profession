<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend;
use App\Models\Abouts;
use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Testimunial;

class FrontendController extends Controller
{
    function Index(){
        $abouts=Abouts::all();
        $services=Services::all();
        $portfolio=Portfolio::all();
        $testimunial=Testimunial::all();
        return view('frontend.index', compact('abouts','services','portfolio','testimunial'));
    }

}
