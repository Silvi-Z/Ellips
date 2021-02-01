<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('admin.clients.index')->with(['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $data = $request->except('image');
        $photoName = '';
        if ($request->hasFile('image')) {
            $photoName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);

        }
        $data['image'] = $photoName;
        Client::create($data);
        $request->session()->flash('alert-success', 'Client was successful added!');
        return redirect()->route('admin.clients.index');

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
        $client = Client::findOrFail($id);



        return view('admin.clients.create', ['client'=> $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientRequest $request, $id)
    {
        $client = Client::findOrFail($id);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $photoName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);
            $data['image'] = $photoName;
        }
        $client->update($data);
        $request->session()->flash('alert-success', 'Client was successful added!');
        return redirect()->route('admin.clients.index');

        $request->session()->flash('alert-success', 'Client was successful edited!');

        return redirect()->route('admin.clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        Client::findOrFail($id)->delete();



        $request->session()->flash('alert-success', 'Category was successful deleted!');

        return redirect()->route('admin.clients.index');
    }
}
