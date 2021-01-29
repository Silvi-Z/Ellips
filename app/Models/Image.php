<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = ['owner_id','owner_type','text_hy','text_ru','text_en','video','url','image_name'];

    public function owner()
    {
        return $this->morphTo();
    }
}
