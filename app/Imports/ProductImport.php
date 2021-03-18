<?php

namespace App\Imports;

use App\Helpers\Helper;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\System;
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
        if ($row[0] != 'Title am') {

            $data = [
                'title_hy' => $row[0],
                'title_en' => $row[2],
                'title_ru' => $row[1],
                'text_hy' => $row[5],
                'text_ru' => $row[6],
                'text_en' => $row[7],
                'price' => $row[9],
                'url' => Helper::slugify($row[2]),
            ];
//            dd($row);
            if ($row[3]) {
                $categories = explode(',', $row[3]);

                $cats = [];
                foreach ($categories as $category) {
                    $cat = Category::where('title_hy', $category)->first();
                    if ($cat) {
                        $cats[] = $cat->id;
                    }
                }
//                dd($cats);
                if($row[4]){
                    $brand = Brand::where('title_en',$row[4])->first();
                    if($brand){
                        $data['brand_id'] =  $brand->id;
                    }
                }
                if($row[5]){
                    $systems = explode(',', $row[5]);
//                    dd($systems);
                    $syses = [];
                    foreach ($systems as $system){
                        $sys = System::where('title_hy', $system)->first();
                        if ($sys) {
                            $syses[] = $sys->id;
                        }
                    }

                }
                if($row[10]){
                    $images = explode(',', $row[10]);
                    $imgs = [];
                    foreach ($images as $image){
                        $imgs[]= ['image_name'=>$image.'.jpg'];
                    }

                }
                if(!empty($cats) && count($cats)){
                    $product = Product::create($data);
                    $product->categories()->attach($cats);
                    if(!empty($imgs) && count($imgs)){
                        $product->images()->createMany($imgs);
                    }
                    if(!empty($syses) && count($syses)){

                        $product->systems()->attach($syses);
                    }
                }

            }

        }

//        $portfolio->images()->create([
//           'image_name'=>'1613977262.jpg'
//        ]);
//        return $portfolio;
    }
}
