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

            'title_th'=>'bail|required|min:3|max:255',
            'title_en'=>'bail|required|min:3|max:255',
            // 'short_desc_th'=>'bail|min:3|max:255',
            // 'short_desc_en'=>'bail|min:3|max:255',
            // 'price_th'=>'bail|integer',
            // 'price_en'=>'bail|integer',
            'status'=>'bail|required|integer',
            'category_id'=>'bail|required|integer',
            'thumbnail_th' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'thumbnail_en' => 'bail|image|mimes:jpeg,png,jpg|max:2048',

            'img_th_1' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_2' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_3' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_4' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_5' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_6' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_th_7' => 'bail|image|mimes:jpeg,png,jpg|max:2048',

            'img_en_1' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_en_2' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_en_3' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_en_4' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_en_5' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_en_6' => 'bail|image|mimes:jpeg,png,jpg|max:2048',
            'img_en_7' => 'bail|image|mimes:jpeg,png,jpg|max:2048',

            // 'title_menu_th_1' => 'bail|min:3|max:255',
            // 'price_th_1' => 'bail|numeric',
            // 'title_menu_th_2' => 'bail|min:3|max:255',
            // 'price_th_2' => 'bail|integer',
            // 'title_menu_th_3' => 'bail|min:3|max:255',
            // 'price_th_3' => 'bail|integer',
            // 'title_menu_th_4' => 'bail|min:3|max:255',
            // 'price_th_4' => 'bail|integer',
            // 'title_menu_th_5' => 'bail|min:3|max:255',
            // 'price_th_5' => 'bail|integer',
            // 'title_menu_th_6' => 'bail|min:3|max:255',
            // 'price_th_6' => 'bail|integer',
            // 'title_menu_th_7' => 'bail|min:3|max:255',
            // 'price_th_7' => 'bail|integer',

            // 'title_menu_en_1' => 'bail|min:3|max:255',
            // 'price_en_1' => 'bail|integer',
            // 'title_menu_en_2' => 'bail|min:3|max:255',
            // 'price_en_2' => 'bail|integer',
            // 'title_menu_en_3' => 'bail|min:3|max:255',
            // 'price_en_3' => 'bail|integer',
            // 'title_menu_en_4' => 'bail|min:3|max:255',
            // 'price_en_4' => 'bail|integer',
            // 'title_menu_en_5' => 'bail|min:3|max:255',
            // 'price_en_5' => 'bail|integer',
            // 'title_menu_en_6' => 'bail|min:3|max:255',
            // 'price_en_6' => 'bail|integer',
            // 'title_menu_en_7' => 'bail|min:3|max:255',
            // 'price_en_7' => 'bail|integer',

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
                'img_en_1.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_1.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_en_2.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_2.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_en_3.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_3.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_en_4.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_4.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_en_5.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_5.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_en_6.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_6.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
                'img_en_7.mimes'=>'กรุณาเลือกรูปเฉพาะ jpeg , jpg หรือ png เท่านั้นค่ะ ',
                'img_en_7.max'=>'รูปไม่ควรมีขนาดเกิน 2MB ค่ะ ',
        ];
    }
}
