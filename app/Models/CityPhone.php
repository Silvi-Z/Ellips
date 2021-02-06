<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityPhone extends Model
{
    protected $fillable = ['phone'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
