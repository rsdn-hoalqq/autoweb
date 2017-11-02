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
            'name' => 'required',
            'email' => 'required|email|unique:user,email',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required|',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'email.required' => 'Bạn chưa nhập mail người dùng',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu không được để trống',
            'password.confirmed' => 'Xác nhận mật khẩu chưa đúng',
            'password_confirmation.required' => 'Xác nhận mật khẩu không được để trống',
        ];
    }
}
