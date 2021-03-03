<?php

namespace App\Http\Controllers;

use App\Imports\PortImport;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {
        Excel::import( new PortImport,'files/portfolios.xlsx');
        dd(Portfolio::all());
    }
}
