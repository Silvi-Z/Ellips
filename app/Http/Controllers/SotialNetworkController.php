<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;

class SotialNetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $social_networks = SocialNetwork::all();
        return view('admin.social_networks.index')->with(['social_networks'=>$social_networks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.social_networks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_am' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'url' => 'required',

        ]);
        SocialNetwork::create($request->all());
        $request->session()->flash('alert-success', 'Sotial was successful added!');
        return redirect()->route('admin.social_networks.create');

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
        $social_network = SocialNetwork::findOrFail($id);



        return view('admin.social_networks.create', ['social_network'=> $social_network]);
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
        $social_network = SocialNetwork::findOrFail($id);
        $request->validate([
            'name_am' => 'required',
            'name_ru' => 'required',
            'name_en' => 'required',
            'url' => 'required',

        ]);

        $social_network->update($request->all());
        $request->session()->flash('alert-success', 'Sotial was successful added!');
        return redirect()->route('admin.social_networks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        SocialNetwork::findOrFail($id)->delete();
        $request->session()->flash('alert-success', 'Sotial was successful deleted!');

        return redirect()->route('admin.social_networks.index');
    }
}
