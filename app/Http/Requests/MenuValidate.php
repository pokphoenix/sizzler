<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuValidate extends FormRequest
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
            'img_th_1' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_2' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_3' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_4' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_5' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_6' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_7' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function messages()
    {
        return [
                'img_th_1.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_1.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_th_2.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_2.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_th_3.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_3.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_th_4.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_4.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_th_5.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_5.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_th_6.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_6.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_th_7.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_th_7.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
        ];
    }
}
