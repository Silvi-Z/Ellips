<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Image;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        $slider = Slider::first();
        return view('admin.slider', ['slider' => $slider]);


    }

    public function update(SliderRequest $request)
    {

        $slider = Slider::findOrFail($request->id);
        $files = [];

        foreach ($request->upload_files as $key=>$file){
            $files[$key] = [
                'text_hy' => $file['text_hy'],
                'text_en' => $file['text_en'],
                'text_ru' => $file['text_ru'],
                'url' => $file['url'],
            ];
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

        $slider->images()->delete();
        $slider->images()->createMany($files);

        return view('admin.slider', ['slider' => $slider]);


    }
}
