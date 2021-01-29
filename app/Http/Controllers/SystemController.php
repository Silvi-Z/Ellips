<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\SystemRequest;
use App\Models\System;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $systems = System::all();

        return view('admin.systems.index')->with(['systems'=>$systems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.systems.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SystemRequest $request)
    {
        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
        ];

        $data['url'] = Helper::slugify($data['title_en']);
//        dd($data);die;

        $files = [];
        foreach ($request->upload_files as $key=>$file){
            $files[$key] = [
                'text_hy'=>$file['text_hy'],
                'text_en'=>$file['text_en'],
                'text_ru'=>$file['text_ru'],
            ];
            if(isset($file->video) && $file->video){
                $files[$key]['video'] = $file->video;
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

        $system = System::create($data);
        $system->images()->createMany($files);
        $request->session()->flash('alert-success', 'System has successful added!');
        return redirect()->route('admin.systems.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,SystemRequest $request)
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
        $system = System::findOrFail($id);

        return view('admin.systems.create')->with(['system'=>$system]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $system = System::findOrFail($id);
        $system->images()->delete();
        $system->delete();

        $request->session()->flash('alert-success', 'Category was successful deleted!');

        return redirect()->route('admin.systems.index');
    }
}
