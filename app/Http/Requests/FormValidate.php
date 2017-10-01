<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidate extends FormRequest
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
            'name_th'=>'bail|required',
            'name_en'=>'bail|required',
            'status'=>'bail|required',
            'thumbnail' => 'bail|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }

    public function messages()
    {
        return [
                'name_th.required'=>'กรุณาระบุ Name TH ',
                'name_en.required'=>'กรุณาระบุ Name EN ',
                'status.required'=>'กรุณาเลือกสถานะ ',
                'thumbnail.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'thumbnail.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ '
        ];
    }
}
