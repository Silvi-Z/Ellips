<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en','image','url'];

    public function products()
    {
        return $this->belongsToMany(Product::class,'category_products','category_id','product_id');
    }
    public function scopeSearch($query, $request){

        if($request->search){
            $query->where('tytle_'.app()->getLocale(),$request->search);
        }
        if($request->system_id){
            return $query->whereHas('products',function ($query) use($request){
                $query->whereHas('systems',function ($query) use($request){
                    $query->where('systems.id',$request->system_id);
                });
            });
        } else {
            return $query;
        }
    }
}
