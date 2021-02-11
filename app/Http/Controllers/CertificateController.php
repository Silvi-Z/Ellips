<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates = Certificate::all();
        return view('admin.certificates.index')->with(['certificates'=>$certificates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.certificates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title_hy' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'number' => 'required',

        ]);

        Certificate::create($request->all());
        $request->session()->flash('alert-success', 'Certificate  was successful added!');
        return redirect()->route('admin.certificates.index');

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
        $certificate = Certificate::findOrFail($id);



        return view('admin.certificates.create', ['certificate'=> $certificate]);
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
        $certificate = Certificate::findOrFail($id);
        $request->validate([
            'title_hy' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'number' => 'required',

        ]);

        $certificate->update($request->all());
        $request->session()->flash('alert-success', 'Certificate was successful added!');
        return redirect()->route('admin.certificates.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        Certificate::findOrFail($id)->delete();
        $request->session()->flash('alert-success', 'Certificate was successful deleted!');

        return redirect()->route('admin.certificates.index');
    }
}
