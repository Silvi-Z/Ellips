<?php

namespace App\Http\Controllers;

use App\Http\Requests\HistoryRequest;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $histories = History::all();
        return view('admin.histories.index')->with(['histories'=>$histories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.histories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HistoryRequest $request)
    {
        $data = $request->except('image');
        $photoName = '';
        if ($request->hasFile('image')) {
            $photoName =  md5(microtime()) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);

        }
        $data['image'] = $photoName;
        History::create($data);

        $request->session()->flash('alert-success', 'History was successful added!');
        return redirect()->route('admin.histories.index');

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
        $history = History::findOrFail($id);



        return view('admin.histories.create', ['history'=> $history]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HistoryRequest $request, $id)
    {
        $history = History::findOrFail($id);

        $data = $request->except('image');

        if ($request->hasFile('image')) {
            $photoName =  md5(microtime()) . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('files'), $photoName);
            $data['image'] = $photoName;
        }
        $history->update($data);
        $request->session()->flash('alert-success', 'History was successful added!');
        return redirect()->route('admin.histories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        History::findOrFail($id)->delete();
        $request->session()->flash('alert-success', 'History was successful deleted!');

        return redirect()->route('admin.histories.index');
    }
}
