<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'    =>'required|max:20|min:3',
            'role'    =>'required',
            'username'=>'required|max:20|min:6',
            'password'=>'required|max:20|min:6',
            'email'   =>'required|email:'
        ];
    }
    public function messages()
    {
        return [
            'required'=>':attribute không được để trống',
            'max'     =>':attribute không được quá :max ký tự',
            'min'     =>':attribute không được ít hơn :min ký tự',
            'email'   =>':attribute khải đúng định dạng'
        ];
    }
    public function attributes(){
        return [
            'name'=>'Tên',
            'role'=>'Phân quyền',
            'username'=>'Tên đăng nhập',
            'password'=>'Mật khẩu',
            'email'   =>'Email'
        ];
    }
}
