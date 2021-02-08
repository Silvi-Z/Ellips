<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.cities.index')->with(['cities'=>$cities]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
            ];
        $city = City::create($data);
        $city->city_addresses()->createMany($request->adresses);
        $city->city_emails()->createMany($request->emails);
        $city->city_phones()->createMany($request->phones);

        $request->session()->flash('alert-success', 'City was successful added!');
        return redirect()->route('admin.cities.index');

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
        $city = City::findOrFail($id);
        return view('admin.cities.create', ['city'=> $city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {
        $city = City::findOrFail($id);
        $data = [
            'title_hy'=>$request->title_hy,
            'title_en'=>$request->title_en,
            'title_ru'=>$request->title_ru,
        ];
        $city->update($data);
        $city->city_addresses()->delete();
        $city->city_addresses()->createMany($request->adresses);
        $city->city_emails()->delete();
        $city->city_emails()->createMany($request->emails);
        $city->city_phones()->delete();
        $city->city_phones()->createMany($request->phones);
        $request->session()->flash('alert-success', 'City was successful edited!');

        return redirect()->route('admin.cities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {

        $city = City::findOrFail($id);
        $city->city_addresses()->delete();
        $city->city_emails()->delete();
        $city->city_phones()->delete();
        $city->delete();

        $request->session()->flash('alert-success', 'City was successful deleted!');

        return redirect()->route('admin.cities.index');
    }
}
