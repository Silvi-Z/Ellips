<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['text_hy', 'text_ru', 'text_en', 'company_hy','company_ru','company_en', 'number'];
}
