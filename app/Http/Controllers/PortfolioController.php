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
            'client_hy'=>$request->client_hy,
            'client_ru'=>$request->client_ru,
            'client_en'=>$request->client_en,
            'work_en'=>$request->work_en,
            'work_hy'=>$request->work_hy,
            'work_ru'=>$request->work_ru,
            'text_hy'=>$request->text_hy,
            'text_en'=>$request->text_en,
            'text_ru'=>$request->text_ru,
            'small_text_hy'=>$request->small_text_hy,
            'small_text_en'=>$request->small_text_en,
            'small_text_ru'=>$request->small_text_ru,
        ];
        $data['url'] = Helper::slugify($data['title_en']);
        $data['top'] = isset($request->top)?1:0;
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
            'client_hy'=>$request->client_hy,
            'client_ru'=>$request->client_ru,
            'client_en'=>$request->client_en,
            'work_en'=>$request->work_en,
            'work_hy'=>$request->work_hy,
            'work_ru'=>$request->work_ru,
            'text_hy'=>$request->text_hy,
            'text_en'=>$request->text_en,
            'text_ru'=>$request->text_ru,
            'small_text_hy'=>$request->small_text_hy,
            'small_text_en'=>$request->small_text_en,
            'small_text_ru'=>$request->small_text_ru,
        ];
        $data['url'] = Helper::slugify($data['title_en']);
        $data['top'] = isset($request->top)?1:0;
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
