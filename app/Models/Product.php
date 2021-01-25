<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title_am','title_ru','title_en','text_am','text_ru','text_en','brand_id','price'];


}
