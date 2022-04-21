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
            'gender' => 'required|min:1',
            'prefecture' => 'required|min:1',
            'company' => 'required|min:1',
            'jyob' => 'required|min:1',
            'employmentstatus' => 'required|min:1',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '氏名は必須です',
            'name.min' => ':min 文字以上入力してください',
            'gender.required' => '性別は必須です',
            'prefecture.required' => '都道府県は必須です',
            'jyob.required' => '所属形態は必須です',
            'employmentstatus.required' => '役職は必須です',
        ];
    }
}