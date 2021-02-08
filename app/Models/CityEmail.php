<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityEmail extends Model
{
    protected $fillable = ['email','city_id'];

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
