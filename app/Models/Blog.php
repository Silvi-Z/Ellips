<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['title_hy','title_ru','title_en','text_hy','text_ru','text_en','url'];
    public function images()
    {
        return $this->morphMany(Image::class, 'owner');
    }
    public function first_image()
    {
        $first = $this->images()->whereNotNull('image_name')->where('image_name','<>','')->first();
        if($first){
            return asset('files/'.$first->image_name);
        }else{
            return asset('files/static.png');
        }
    }
}
