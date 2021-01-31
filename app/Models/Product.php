<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en','text_hy','text_ru','text_en','brand_id','price','url'];

    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products', 'product_id', 'category_id');
    }
    public function systems()
    {
        return $this->belongsToMany(System::class, 'system_products', 'product_id', 'system_id');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'owner');
    }
}
