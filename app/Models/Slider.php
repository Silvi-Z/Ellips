<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    public function images()
    {
        return $this->morphMany(Image::class, 'owner');
    }
}
