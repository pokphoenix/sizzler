<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationValidate extends FormRequest
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
            'lat' => 'bail|required',
            'lng' => 'bail|required',
            'address_th' => 'bail|required',
            'address_en' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
                'name_th.required'=>'กรุณาระบุ ชื่อภาษาไทย',
                'name_en.required'=>'กรุณาระบุ ชื่อภาษาอังกฤษ',
                'status.required'=>'กรุณาเลือกสถานะ',
                'lat.required'=>'กรุณาระบุ ละติจูด',
                'lng.required'=>'กรุณาระบุลองจิจูด',
                'address_th.required'=>'กรุณาระบุที่อยู่',
                'address_en.required'=>'กรุณาระบุที่อยู่',
        ];
    }
}
