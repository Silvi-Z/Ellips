<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Product;
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
        $portfolios = Portfolio::inRandomOrder()->take(5)->get();
        $products = Product::inRandomOrder()->take(3)->get();

        return view('home')->with([
            'products'=>$products,
        ]);
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
    public function category($url,Request $request)
    {
        $category = Category::where('url', $url)->firstOrFail();
        $systems = System::all();
        $brands = Brand::all();
        $brand_id = isset($request->brand_id)?$request->brand_id:false;
        $system_id = isset($request->system_id )?$request->system_id:false;
        $search = isset($request->search )?$request->search:'';

        $products = Product::whereHas('categories',function ($query) use($category){
            $query->where('category_id',$category->id);
        })->paginate(1);
        return view('productPage')->with([
            'category'=>$category,
            'brands'=>$brands,
            'products'=>$products,
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

    public function portfolios()
    {
        $top_portfolios = Portfolio::where('top',1)->get();
        $portfolios = Portfolio::where('top',0)->get();
        return view('portfolio')->with([
            'portfolios'=>$portfolios,
            'top_portfolios'=>$top_portfolios,
        ]);
    }
    public function portfolioSingle($url)
    {
        $portfolio = Portfolio::where('url', $url)->firstOrFail();
        $portfolios = Portfolio::where('top',0)->get();
        return view('portfolioSingle')->with([
            'portfolio'=>$portfolio,
            'portfolios'=>$portfolios,
        ]);
    }
    public function blogs()
    {
        return view('blogs');
    }

    public function blog()
    {
        return view('blog');
    }

    public function product($url)
    {
        $product = Product::where('url', $url)->firstOrFail();
        $ids = $product->categories()->pluck('category_id');
        $similars = Product::whereHas('categories',function ($query) use($ids){
            $query->whereIn('category_id',$ids);
        })->inRandomOrder()->take(3)->get();

        return view('product')->with([
            'product'=>$product,
            'similars'=>$similars,
        ]);
    }
    public function system($url)
    {
        $system = System::where('url', $url)->firstOrFail();
        return view('system')->with([
            'system'=>$system,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }


}
