<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en'];

    public function city_addresses()
    {
        return $this->hasMany(CityAddress::class, 'city_id');
    }
    public function city_phones()
    {
        return $this->hasMany(CityPhone::class, 'city_id');
    }
    public function city_emails()
    {
        return $this->hasMany(CityEmail::class, 'city_id');
    }
}
