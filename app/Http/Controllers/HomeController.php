<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\About;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\City;
use App\Models\Contact;
use App\Models\ContactService;
use App\Models\History;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SocialNetwork;
use App\Models\System;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

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
            'slider'=>$slider,
            'top_services'=>$top_services,
            'bottom_services'=>$bottom_services,
            'portfolios'=>$portfolios,
        ]);
    }

    public function company()
    {
        $about = About::first();
        $certificates = Certificate::all();
        $histories = History::all();
        return view('company')->with([
            'about'=>$about,
            'histories'=>$histories,
            'certificates'=>$certificates,
        ]);
    }

    public function categories(Request $request)
    {
        $categories = Category::search($request)->orderBy('updated_at','DESC')->get();
        $systems = System::all();
        return view('categories')->with([
            'categories'=>$categories,
            'systems'=>$systems,
            'system_id'=>isset($request->system_id)?$request->system_id:0,
            'search'=>isset($request->search )?$request->search:''
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
        })->search($request)->paginate(1);
        $products->appends($request->all());
        return view('productPage')->with([
            'category'=>$category,
            'brands'=>$brands,
            'products'=>$products,
            'brand_id'=>$brand_id,
            'system_id'=>$system_id,
            'search'=>$search,
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
        $blogs = Blog::orderBy('updated_at','DESC')->paginate(5);

        return view('blogs')->with([
            'blogs'=>$blogs
        ]);
    }

    public function blog($url)
    {
        $blog = Blog::where('url', $url)->firstOrFail();
        $blogs = Blog::inRandomOrder()->take(3)->get();
        return view('blog')->with([
            'blog'=>$blog,
            'blogs'=>$blogs,
        ]);
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

    public function contact(Request $request)
    {
        $cities  = City::all();
        $contact_services  = ContactService::all();
        $socials  = SocialNetwork::all();
        return view('contact')->with([
            'cities'=>$cities,
            'socials'=>$socials,
            'contact_services'=>$contact_services,
        ]);
    }

    public function postContact(Request $request,Mailer $mailer)
    {
        if($request->isMethod('POST')){
            $request->validate([
                'name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'message' => 'required',

            ]);
            $mailer->send(new ContactMail(
                $request->get('email'),
                $request->all()
            ));
            Contact::create($request->all());
            $request->session()->flash('alert-danger', trans('static.Message has been sent successfully'));
            return redirect()->back();
        }
    }
    public function getBlogs(Request $request)
    {
        $blogs = Blog::orderBy('updated_at','DESC')->paginate(5);
        $result = [];
        $result['total'] = $blogs->total();
        $result['html'] =  view('ajax.blogs')->with([
            'blogs'=>$blogs
        ])->render();
        return response()->json($result);
    }


}
