<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Image;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $blogs = Blog::all();
        return view('admin.blogs.index')->with(['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {

        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            'text_hy'=>$request->text_hy,
            'text_en'=>$request->text_en,
            'text_ru'=>$request->text_ru,
        ];
        $data['url'] = Helper::slugify($data['title_en']);
        $files = [];

        foreach ($request->upload_files as $key=>$file){
            if(isset($file['video']) && $file['video']){
                $files[$key]['video'] = $file['video'];
                $files[$key]['image_name'] = '';
            }else{
                $file_name = 'upload_files.'.$key.'.image';

                if ($request->hasFile($file_name)) {
                    $photoName =  md5(microtime()) . '.' . $request->$file_name->getClientOriginalExtension();
                    $request->$file_name->move(public_path('files'), $photoName);

                }else{
                    $request->session()->flash('alert-danger', 'Uplade image or add video link');
                    return redirect()->back();
                }
                $files[$key]['image_name'] = $photoName;
                $files[$key]['video'] = '';
            }
        }
//        dd($data);
        $blog = Blog::create($data);
        
        $blog->images()->createMany($files);
        $request->session()->flash('alert-success', 'Blog has been successfully added!');
        return redirect()->route('admin.blogs.index');
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
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.create')
            ->with(
                [
                    'blog'=>$blog
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
//        dd($request->text_en);
        $blog = Blog::findOrFail($id);
        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            'text_hy'=>$request->text_hy,
            'text_en'=>$request->text_en,
            'text_ru'=>$request->text_ru,
        ];
        $data['url'] = Helper::slugify($data['title_en']);
        $files = [];

        foreach ($request->upload_files as $key=>$file){

            if(isset($file['video']) && $file['video']){
                $files[$key]['video'] = $file['video'];
                $files[$key]['image_name'] = '';
            }else{
                $file_name = 'upload_files.'.$key.'.image';

                if ($request->hasFile($file_name)) {
                    $photoName =  md5(microtime()) . '.' . $request->$file_name->getClientOriginalExtension();
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
                $files[$key]['video'] = '';
            }
        }

        $blog->update($data);
        $blog->images()->delete();
        $blog->images()->createMany($files);
        $request->session()->flash('alert-success', 'Blog has been successfully updated!');
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $blog = Blog::findOrFail($id);
        $blog->images()->delete();
        $blog->delete();
        $request->session()->flash('alert-success', 'Blog has been successfully deleted!');
        return redirect()->route('admin.blogs.index');
    }
}
