<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\User;
use App\Models\Abouts;
use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Testimunial;

class DashboardController extends Controller
{
    function __construct(){
        $this->middleware('verified');
    }

    function Dashboard(){
        return view('Dashboard.dashboard');
    }

    function AllUser(){
        $alluser=User::paginate(5);
        return view('Dashboard.Users.user', compact('alluser'));
    }

    //********************//

    function About(){
        return view('backend.about');
    }

    function AboutList(){
        $alluser=Abouts::paginate(5);
        return view('Dashboard.Abouts.about-list', compact('alluser'));
    }

    //*******************************//

    function Services(){
        return view('backend.add-services');
    }

    function ServicesList(){
        $alluser=Services::all();
        return view('Dashboard.Services.services-list', compact('alluser'));
    }

    //*************************//

    function AddPortfolio(){
        return view('backend.add-portfolio');
    }

    function AllPortfolio(){
        $portfolio=Portfolio::all();
        return view('Dashboard.Portfolio.all-portfolio', compact('portfolio'));
    }

    //*************************//

    function AddTestimunial(){
        return view('backend.add-testimunial');
    }

    function AllTestimunial(){
        $testimunial=Testimunial::all();
        return view('Dashboard.Testimunial.all-testimunial', compact('testimunial'));
    }

}
