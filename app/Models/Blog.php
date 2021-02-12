<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en','text_hy','text_ru','text_en','url'];
    public function images()
    {
        return $this->morphMany(Image::class, 'owner');
    }
}
