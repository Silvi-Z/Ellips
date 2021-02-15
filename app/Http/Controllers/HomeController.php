<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
use App\Models\System;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = Slider::first();
        $top_services = Service::where('top',1)->get();
        $bottom_services = Service::where('bottom',1)->get();
        $portfolios = Portfolio::inRandomOrder()->take(5)->get();;

        return view('home');
    }

    public function company()
    {
        return view('company');
    }

    public function categories(Request $request)
    {
        $categories = Category::search($request)->orderBy('updated_at','DESC')->get();
        $systems = System::all();
        return view('categories')->with([
            'categories'=>$categories,
            'systems'=>$systems
            ]);
    }
    public function category($url)
    {
        $category = Category::where('url', $url)->firstOrFail();
        $systems = System::all();
        $brands = Brand::all();
        return view('productPage')->with([
            'category'=>$category,
            'brands'=>$brands,
            'systems'=>$systems
        ]);
    }

    public function systems()
    {
        $systems = System::all();
        return view('systems')->with([
            'systems'=>$systems
        ]);
    }

    public function services()
    {
        return view('home');
    }

    public function portfolio()
    {
        return view('portfolio');
    }
    public function portfolioSingle()
    {
        return view('portfolioSingle');
    }
    public function blogs()
    {
        return view('blogs');
    }

    public function blog()
    {
        return view('blog');
    }

    public function product()
    {
        return view('product');
    }
    public function system()
    {
        return view('system');
    }

    public function contact()
    {
        return view('contact');
    }


}
