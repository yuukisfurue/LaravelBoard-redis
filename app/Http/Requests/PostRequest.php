<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => 'required|min:3',
            'gender' => 'required',
            'pref' => 'required',
            'jyob' => 'required',
            'employmentstatus' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '氏名は必須です',
            'name.min' => ':min 文字以上入力してください',
        ];
    }
}