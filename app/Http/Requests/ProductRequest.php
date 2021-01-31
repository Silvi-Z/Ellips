<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'upload_files'=>'required|array',
            'text_hy'=>'required',
            'text_ru'=>'required',
            'text_en'=>'required',
            'categories'=>'required|array',
            'categories.*'=>'required|exists:categories,id',
            'brand_id'=>'required|exists:brands,id',
            'systems'=>'required|array',
            'systems.*'=>'required|exists:systems,id',
//            'upload_files.*.image'=>'image',
//            'upload_files.*.video'=>'string',
        ];
    }
}
