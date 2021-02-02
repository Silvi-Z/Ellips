<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Models\Image;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $portfolios = Portfolio::all();
        return view('admin.portfolios.index')->with(['portfolios'=>$portfolios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PortfolioRequest $request)
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
        $portfolio = Portfolio::create($data);
        
        $portfolio->images()->createMany($files);
        $request->session()->flash('alert-success', 'Portfolio has successful added!');
        return redirect()->route('admin.portfolios.index');
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
        $portfolio = Portfolio::findOrFail($id);
        return view('admin.portfolios.create')
            ->with(
                [
                    'portfolio'=>$portfolio
                ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioRequest $request, $id)
    {
//        dd($request->text_en);
        $portfolio = Portfolio::findOrFail($id);
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

        $portfolio->update($data);
        $portfolio->images()->delete();
        $portfolio->images()->createMany($files);
        $request->session()->flash('alert-success', 'Portfolio has successful updated!');
        return redirect()->route('admin.portfolios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->images()->delete();
        $portfolio->delete();
        $request->session()->flash('alert-success', 'Portfolio has successful deleted!');
        return redirect()->route('admin.portfolios.index');
    }
}
