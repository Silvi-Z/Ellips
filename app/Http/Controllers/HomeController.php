<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Slider;
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

    public function products()
    {
        return view('products');
    }

    public function systems()
    {
        return view('systems');
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
    public function productPage()
    {
        return view('productPage');
    }

}
