<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frontend;

class FrontendController extends Controller
{
    function Index(){
        return view('frontend.index');
    }
}
