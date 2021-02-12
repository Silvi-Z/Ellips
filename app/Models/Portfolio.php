<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable =  ['title_hy','title_ru','title_en','text_hy','text_ru','small_text_en','small_text_hy','small_text_ru','text_en','url'];
    public function images()
    {
        return $this->morphMany(Image::class, 'owner');
    }
}
