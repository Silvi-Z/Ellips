<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en'];

    public function products()
    {
        return $this->belongsToMany(Product::class,'category_products');
    }
}
