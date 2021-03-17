<?php

namespace App\Http\Controllers;

use App\Imports\PortImport;
use App\Imports\ProductImport;
use App\Models\Portfolio;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function index()
    {
        Excel::import( new ProductImport(),'files/products.xlsx');
        dd(Product::all());
    }
}
