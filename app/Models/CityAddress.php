<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityAddress extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
