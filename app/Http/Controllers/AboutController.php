<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request)
    {
        $about = About::first();

        if($request->isMethod('POST')){
            $request->validate([
                'text_hy' => 'required',
                'text_ru' => 'required',
                'text_en' => 'required',
                'company_hy' => 'required',
                'company_ru' => 'required',
                'company_en' => 'required',

            ]);
            if($request->id){
                $about = About::findOrFail($request->id);
                $about->update($request->all());
            }else{
                About::create($request->all());
            }
        }
        return view('admin.about')->with(['about'=>$about]);
    }
}
