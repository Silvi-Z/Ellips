<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityPhon extends Model
{
    protected $fillable = ['phone','city_id'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
