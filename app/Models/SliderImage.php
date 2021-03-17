<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SliderImage extends Model
{
    protected $fillable = ['lang','image','title','url','slider_id'];

    public function slider()
    {
        return $this->belongsTo(Slider::class, 'slider_id');
    }

}
