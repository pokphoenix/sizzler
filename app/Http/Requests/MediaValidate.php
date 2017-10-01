<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaValidate extends FormRequest
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
            'url'=>'bail|required',
            'name_th'=>'bail|required',
            'name_en'=>'bail|required',
            'short_desc_th'=>'bail|required',
            'short_desc_en'=>'bail|required',  
            'status'=>'bail|required',
            'thumbnail_th' => 'bail|image|mimes:jpeg,png,jpg|max:2048'
            'thumbnail_en' => 'bail|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }
     public function messages()
    {
        return [
                'url.required'=>'กรุณาระบุ url ของคลิบวีดีโอ ',
                'name_th.required'=>'กรุณาระบุ ชื่อคลิบภาษาไทย ',
                'name_en.required'=>'กรุณาระบุ ชื่อคลิบภาษาอังกฤษ ', 
                'short_desc_th.required'=>'กรุณาระบุ รายละเอียดอย่างย่อๆ ภาษาไทย',
                'short_desc_en.required'=>'กรุณาระบุ รายละเอียดอย่างย่อๆ ภาษาอังกฤษ',
                'thumbnail_th.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'thumbnail_th.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'thumbnail_en.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'thumbnail_en.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
        ];
    }
}
