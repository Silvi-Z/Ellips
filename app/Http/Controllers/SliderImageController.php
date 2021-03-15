<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Models\SliderImage;
use Illuminate\Http\Request;

class SliderImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::firstOrFail()->images;
        return view('admin.sliders.index')->with(['sliders'=>$sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $slider = Slider::firstOrFail();
        $data = $request->except('image');
        $photoName = '';
        if ($request->hasFile('image')) {
            $photoName =  md5(microtime()) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);
        }
        $data['slider_id'] = $slider->id;
        $data['image'] = $photoName;
        SliderImage::create($data);
        $request->session()->flash('alert-success', 'Slider image was successful added!');
        return redirect()->route('admin.sliders.index');

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

        $slider = SliderImage::findOrFail($id);



        return view('admin.sliders.create', ['slider'=> $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request, $id)
    {
        $slider = SliderImage::findOrFail($id);
        $data = $request->except('image');
        if ($request->hasFile('image')) {
            $photoName =  md5(microtime()) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);
            $data['image'] = $photoName;
        }
        $slider->update($data);
        $request->session()->flash('alert-success', 'Slider image was successful edited!');

        return redirect()->route('admin.sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        SliderImage::findOrFail($id)->delete();



        $request->session()->flash('alert-success', 'Slider image was successful deleted!');

        return redirect()->route('admin.sliders.index');
    }
}
