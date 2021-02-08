<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(SliderRequest $request)
    {
        $slider = Slider::findOrFail(1);
        if($request->isMethod('POST')){
            $files = [];
            foreach ($request->upload_files as $key=>$file){
                $files[$key] = [
                    'text_hy'=>$file['text_hy'],
                    'text_en'=>$file['text_en'],
                    'text_ru'=>$file['text_ru'],
                    'url'=>$file['url'],
                ];
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
            $slider->images()->delete();
            $slider->images()->createMany($files);
        }
        return view('admin.slider', ['slider'=> $slider]);


    }
}
