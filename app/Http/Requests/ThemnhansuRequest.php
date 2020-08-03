<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ThemnhansuRequest extends FormRequest
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
           
            'name'     => 'required',
            'email'     => 'required|unique:nhan_su|email',
            'dienthoai'     => 'required',
            'diachi'     => 'required',
           
        ];
    }

    public function messages()
    {
        return [
         
            'name.required'     => 'Bạn chưa nhập tên nhân viên',
            'email.required'     => 'Bạn chưa nhập  email',
            'email.unique'     => 'Email đã tồn tại',
            'email.email'     => 'Email không đúng định dạng',
            'dienthoai.required'     => 'Bạn chưa nhập số điện thoại',
            'diachi.required'     => 'Bạn chưa nhập địa chỉ',
         
        ];
    }
}