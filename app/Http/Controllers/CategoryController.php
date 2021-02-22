<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index')->with(['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->except('image');
        $data['url'] = Helper::slugify($data['title_en']);
        $photoName = '';
        if ($request->hasFile('image')) {
            $photoName =  md5(microtime()) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);
        }
        $data['image'] = $photoName;
        Category::create($data);
        $request->session()->flash('alert-success', 'Category was successful added!');
        return redirect()->route('admin.categories.index');

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

        $category = Category::findOrFail($id);



        return view('admin.categories.create', ['category'=> $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->except('image');
        $data['url'] = Helper::slugify($data['title_en']);
        if ($request->hasFile('image')) {
            $photoName =  md5(microtime()) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);
            $data['image'] = $photoName;
        }
        $category->update($data);
        $request->session()->flash('alert-success', 'Category was successful edited!');

        return redirect()->route('admin.categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        Category::findOrFail($id)->delete();



        $request->session()->flash('alert-success', 'Category was successful deleted!');

        return redirect()->route('admin.categories.index');
    }
}
