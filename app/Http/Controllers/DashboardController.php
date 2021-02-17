<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use App\Models\System;

class DashboardController extends Controller
{

    public function index()

    {

        $systems_count = System::all()->count();

        $services_count = Service::all()->count();

        $products_count = Product::all()->count();

        $categories_count = Category::all()->count();

        return view('admin.index',
            ['products_count'=>$products_count,
                'categories_count'=>$categories_count,
                'services_count'=>$services_count,
                'systems_count'=> $systems_count
            ]
        );

    }

    public function contacts()
    {
        return view('admin.contacts',
            ['contacts'=>Contact::orderBy('updated_at','DESC')->get(),
            ]
        );
    }

    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image',

        ]);

        if ($request->hasFile('file')) {
            $photoName = time() . '.' . $request->file->getClientOriginalExtension();
            $request->file->move(public_path('files'), $photoName);
            return response()->json(['location'=>asset('files/'.$photoName)]);
        }

    }
}
