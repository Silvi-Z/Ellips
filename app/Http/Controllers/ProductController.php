<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\System;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::all();
        return view('admin.products.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.products.create')
            ->with(
                [
                    'categories'=>Category::all(),
                        'brands'=>Brand::all(),
                    'systems'=>System::all(),
                ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
//        dd($request->all());
        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            'text_hy'=>$request->text_hy,
            'text_en'=>$request->text_en,
            'text_ru'=>$request->text_ru,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
        ];
        $data['url'] = Helper::slugify($data['title_en']);
        $files = [];

        foreach ($request->upload_files as $key=>$file){
            if(isset($file['video']) && $file['video']){
                $files[$key]['video'] = $file['video'];
            }else{
                $file_name = 'upload_files.'.$key.'.image';

                if ($request->hasFile($file_name)) {
                    $photoName = time() . '.' . $request->$file_name->getClientOriginalExtension();
                    $request->$file_name->move(public_path('files'), $photoName);

                }else{
                    $request->session()->flash('alert-danger', 'Uplade image or add video link');
                    return redirect()->back();
                }
                $files[$key]['image_name'] = $photoName;
            }
        }
//        dd($data);
        $product = Product::create($data);
        $product->systems()->attach($request->systems);
        $product->categories()->attach($request->categories);
        $product->images()->createMany($files);
        $request->session()->flash('alert-success', 'Product has successful added!');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.create')
            ->with(
                [
                    'categories'=>Category::all(),
                    'product'=>$product,
                    'product_categories'=>$product->categories()->pluck('category_id')->toArray(),
                    'product_systems'=>$product->systems()->pluck('system_id')->toArray(),
                    'brands'=>Brand::all(),
                    'systems'=>System::all(),
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);
        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            'text_hy'=>$request->text_hy,
            'text_en'=>$request->text_en,
            'text_ru'=>$request->text_ru,
            'brand_id'=>$request->brand_id,
            'price'=>$request->price,
        ];
        $data['url'] = Helper::slugify($data['title_en']);
        $files = [];

        foreach ($request->upload_files as $key=>$file){

            if(isset($file['video']) && $file['video']){
                $files[$key]['video'] = $file['video'];
            }else{
                $file_name = 'upload_files.'.$key.'.image';

                if ($request->hasFile($file_name)) {
                    $photoName = time() . '.' . $request->$file_name->getClientOriginalExtension();
                    $request->$file_name->move(public_path('files'), $photoName);

                }else{

                    if(isset($file['id'])){
                        $image = Image::findOrFail($file['id']);

                        if($image->image_name){
                            $photoName = $image->image_name;
                        }else{
                            $request->session()->flash('alert-danger', 'Uplade image or add video link in '.($key+1).' block');
                            return redirect()->back();
                        }
                    }else{
                        $request->session()->flash('alert-danger', 'Uplade image or add video link in '.($key+1).' block');
                        return redirect()->back();
                    }
                }
                $files[$key]['image_name'] = $photoName;
            }
        }

        $product->update($data);
        $product->systems()->sync($request->systems);
        $product->categories()->sync($request->categories);
        $product->images()->delete();
        $product->images()->createMany($files);
        $request->session()->flash('alert-success', 'Product has successful updated!');
        return redirect()->route('admin.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->systems()->detach();
        $product->categories()->detach();
        $product->images()->delete();
        $product->delete();
        $request->session()->flash('alert-success', 'Product has successful deleted!');
        return redirect()->route('admin.products.index');
    }
}
