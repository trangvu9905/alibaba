<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemlophocRequest extends FormRequest
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
           
            'name'     => 'required|unique:lophoc,ten',
            'siso'     => 'required',
           
        ];
    }

    public function messages()
    {
        return [
         
            'name.required'     => 'Bạn chưa nhập tên lớp học',
            'name.unique'     => 'Tên lớp đã tồn tại',
            'siso.required'     => 'Bạn chưa nhập sĩ số lớp',
         
        ];
    }
}