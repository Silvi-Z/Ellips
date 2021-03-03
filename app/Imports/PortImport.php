<?php

namespace App\Imports;

use App\Helpers\Helper;
use App\Models\Portfolio;
use Maatwebsite\Excel\Concerns\ToModel;

class PortImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
//        dd($row);
        $portfolio = Portfolio::create([
            'title_hy' => $row[0],
            'title_ru' => $row[1],
            'title_en' => $row[2],
            'url'=>Helper::slugify($row[2])
        ]);
        $portfolio->images()->create([
           'image'=>'1613977262.jpg'
        ]);
        return $portfolio;
    }
}
