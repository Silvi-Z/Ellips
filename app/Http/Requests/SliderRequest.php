<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
            'upload_files'=>'required|array',
            'upload_files.*.text_hy'=>'required',
            'upload_files.*.text_ru'=>'required',
            'upload_files.*.text_en'=>'required',
            ];

            $rules['upload_files.*.image'] = 'image|max:10240';
            $rules['upload_files.*.video'] = 'string';
        return $rules;
    }
}
