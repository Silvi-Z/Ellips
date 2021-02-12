<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialNetwork extends Model
{
    protected $fillable = ['name_am','name_en','name_ru','url'];
    public $timestamps = false;


}
