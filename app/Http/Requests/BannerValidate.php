<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerValidate extends FormRequest
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
            'img_th' => 'bail|image|mimes:jpeg,png,jpg|max:1024',
            'img_en' => 'bail|image|mimes:jpeg,png,jpg|max:1024',
        
        ];
    }

    public function messages()
    {
        return [
                'name_th.required'=>'กรุณาระบุ ชื่อรูปภาษาไทย ',
                'name_en.required'=>'กรุณาระบุ ชื่อรูปภาษาอังกฤษ ',
                'status.required'=>'กรุณาเลือกสถานะ ',
                'img_th.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th.max'=>'รูปไม่ควรมีขนาดเกิน 1MB ค่ะ ',
                'img_en.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en.max'=>'รูปไม่ควรมีขนาดเกิน 1MB ค่ะ ',
                
        ];
    }
}
