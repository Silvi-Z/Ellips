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

        $rules =  [
            'title_hy'=>'required',
            'title_ru'=>'required',
            'title_en'=>'required',
            'price'=>'required|numeric|min:0.01',
            'categories'=>'required|array',
            'categories.*'=>'required|exists:categories,id',
            'brand_id'=>'nullable|exists:brands,id',
            'systems'=>'required|array',
            'systems.*'=>'required|exists:systems,id',
            'upload_files'=>'required|array',
        ];
        if ($this->method() == "PUT") {
            $rules['upload_files.*.image'] = 'image|max:10240';
            $rules['upload_files.*.video'] = 'string';
        }else{
            $rules['upload_files.*.image'] = 'required_without:upload_files.*.video|image|max:10240';
            $rules['upload_files.*.video'] = 'required_without:upload_files.*.image|string';
        }
        return $rules;
    }
}
