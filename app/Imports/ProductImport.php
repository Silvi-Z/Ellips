<?php

namespace App\Imports;

use App\Helpers\Helper;
use App\Models\Category;
use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if($row[0] != 'Title am'){

            $data = [
                'title_hy'=>$row[0],
                'title_en'=>$row[2],
                'title_ru'=>$row[1],
                'text_hy'=>$row[5],
                'text_ru'=>$row[6],
                'text_en'=>$row[7],
                'price'=>$row[9],
                'url'=>Helper::slugify($row[2]),
            ];
            dd($data);
            if($row[3]){
                $categories = explode(',', $row[3]);
                $cats = [];
                foreach ($categories as $category){
                    $cat  = Category::where('title_hy',$category)->first();
                    if($cat){
                        $cats[] = $cat->id;
                    }
            }

            }

            dd($categories);
        }

//        $portfolio->images()->create([
//           'image_name'=>'1613977262.jpg'
//        ]);
//        return $portfolio;
    }
}
