<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactValidate extends FormRequest
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
            'contact-name'=>'bail|max:255',
            'contact-tel'=>'bail|required',
            'contact-email'=>'bail|required|email',
            'contact-text'=>'bail|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'contact-tel.required'=>'กรุณาระบุ เบอร์โทร ',
            'contact-email.required'=>'กรุณาระบุ อีเมล์ ',
            'contact-email.email'=>'กรอกอีเมล์ให้ถูกต้อง ',
            'contact-name.max'=>'ห้ามระบุเกิน 255 ตัวอักษร ',
            'contact-text.max'=>'ห้ามระบุเกิน 1000 ตัวอักษร '
        ];
    }
}
