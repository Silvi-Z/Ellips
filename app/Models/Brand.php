<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
        protected $fillable = ['title_hy','title_ru','title_en'];

    public function products()
    {
        return $this->hasMany(Product::class,'brand_id');
    }
}
