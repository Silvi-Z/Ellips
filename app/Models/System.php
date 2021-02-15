<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en','title_en','text_hy','text_ru','url'];

    public function images()
    {
        return $this->morphMany(Image::class, 'owner');
    }
    public function products()
    {
        return $this->belongsToMany(Product::class,'system_products','system_id','product_id');
    }
    public function first_image()
    {
        $first = $this->images()->whereNotNull('image_name')->first();
        if($first){
            return asset('files/'.$first->image_name);
        }else{
            return asset('front/images/camera1.png');
        }
    }
}
