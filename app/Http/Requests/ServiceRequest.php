<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
        return [
            'title_hy'=>'required',
            'title_ru'=>'required',
            'title_en'=>'required',
            'text_hy'=>'required|string|max:250',
            'text_ru'=>'required|string|max:250',
            'text_en'=>'required|string|max:250'
        ];
    }
}
