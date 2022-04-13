<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Abouts;
use App\Models\Services;
use App\Models\Portfolio;
use App\Models\Testimunial;

class BackendController extends Controller
{
    function AddAbout(Request $request){

        $about=new Abouts;
        $about->title=$request->title;
        $about->value=$request->value;
        $about->save();
        return redirect('about');
    }

    //**********************//

    function AddServices(Request $request){
        $about=new Services;
        $about->heading=$request->heading;
        $about->description=$request->description;
        $about->save();
        return redirect('services-list');
    }

    //**********************//

    function PortfolioPost(Request $request){

        $portfolio=new Portfolio;
        $portfolio->name=$request->name;

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        $portfolio->image=$imageName;

        $imageName = time().'.'.$request->thumbnail->extension();
        $request->thumbnail->move(public_path('image'), $imageName);
        $portfolio->thumbnail=$imageName;

        $portfolio->save();
        return back();
    }

    //**********************//

    function TestimunialPost(Request $request){
        $testimunial=new Testimunial;
        $testimunial->name=$request->name;
        $testimunial->description=$request->description;
        $testimunial->date=$request->date;

        $imageName = $testimunial->name.'.'.$request->image->extension();
        $request->image->move(public_path('Testimunial/'), $imageName);
        $testimunial->image=$imageName;

        $testimunial->save();
    }


}
