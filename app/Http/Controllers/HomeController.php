<?php

namespace App\Http\Controllers;

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

}
