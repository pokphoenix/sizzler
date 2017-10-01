<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthTipValidate extends FormRequest
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
        $imgAside = count($this->input('img_aside'));
        foreach(range(0, $imgAside) as $index) {
            $rules['img_aside.' . $index] = 'image|mimes:jpeg,jpg,png|max:2048';
        }

        return [
            $rules
        ];
    }
}
