<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index(Request $request){
        $statistic = Statistic::first();

        if($request->isMethod('POST')){
            $request->validate([

                'id' => 'required|exists:statistics,id',
                'year_exp' => 'required|integer|min:0',
                'works' => 'required|integer|min:0',
                'work_brands' => 'required|integer|min:0',
                'exp_workers' => 'required|integer|min:0',


            ]);
            Statistic::findOrFail($request->id)->update($request->all());
            $request->session()->flash('alert-success', 'Category was successful edited!');

            return redirect()->route('admin.statistics');
        }
        return view('admin.statistic', ['statistic'=> $statistic]);
    }
}
