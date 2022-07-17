<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $sliders=Slider::where('status',1)->orderBy('id','DESC')->limit(3)->get();
        return view('frontend.index',compact('sliders'));
    }

    
}
