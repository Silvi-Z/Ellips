<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules =  [
            'title_hy'=>'required',
            'title_ru'=>'required',
            'title_en'=>'required',
        ];
        if ($this->method() == "PUT") {
            $rules['image'] = 'image|max:10240';

        }else{
            $rules['image'] = 'required|image|max:10240';
        }
        return $rules;
    }
}
