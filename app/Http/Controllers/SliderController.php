<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $slider = Slider::first();
        return view('admin.slider', ['slider'=> $slider]);


    }
}
