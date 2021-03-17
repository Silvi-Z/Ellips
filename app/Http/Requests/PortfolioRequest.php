<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioRequest extends FormRequest
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
            'client_hy'=>'required_with:top',
            'client_ru'=>'required_with:top',
            'client_en'=>'required_with:top',
            'text_hy'=>'required_with:top',
            'text_ru'=>'required_with:top',
            'text_en'=>'required_with:top',
            'small_text_hy'=>'required_with:top',
            'small_text_ru'=>'required_with:top',
            'small_text_en'=>'required_with:top',
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
