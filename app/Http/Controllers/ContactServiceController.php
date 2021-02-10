<?php

namespace App\Http\Controllers;

use App\Models\ContactService;
use Illuminate\Http\Request;

class ContactServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact_services = ContactService::all();
        return view('admin.contact_services.index')->with(['contact_services'=>$contact_services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contact_services.create');
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
            'phone' => 'required',
            'email' => 'required',

        ]);

        ContactService::create($request->all());
        $request->session()->flash('alert-success', 'Contact service was successful added!');
        return redirect()->route('admin.contact_services.index');

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
        $contact_service = ContactService::findOrFail($id);



        return view('admin.contact_services.create', ['contact_service'=> $contact_service]);
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
        $contact_service = ContactService::findOrFail($id);
        $request->validate([
            'title_hy' => 'required',
            'title_ru' => 'required',
            'title_en' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);

        $contact_service->update($request->all());
        $request->session()->flash('alert-success', 'Contact service was successful added!');
        return redirect()->route('admin.contact_services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        ContactService::findOrFail($id)->delete();
        $request->session()->flash('alert-success', 'Contact service was successful deleted!');

        return redirect()->route('admin.contact_services.index');
    }
}
