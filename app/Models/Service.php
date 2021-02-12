<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en','text_hy','text_ru','text_en','top','bottom'];
}
