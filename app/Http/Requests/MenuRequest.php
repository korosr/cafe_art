<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
        $rules = [];

        if($this->has('insert')){
            $rules['imgpath'] = 'required';
        }

        $rules['name'] = 'required|max:100';
        $rules['fee'] = 'required|numeric';
        // return [
        //     'name' => 'required|max:100',
        //     'fee' => 'required|numeric',
        //     'imgpath' => 'required',
        // ];

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => '商品名',
            'fee' => '値段',
            'imgpath' => '画像',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute を入力してください',
            'name.max' => ':attribute は100文字以内で入力してください',
            'fee.required' => ':attribute を入力してください',
            'fee.numeric' => ':attribute は数値で入力してください',
            'imgpath.required' => ':attribute を選択してください',
        ];
    }
}
