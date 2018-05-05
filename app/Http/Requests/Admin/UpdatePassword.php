<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePassword extends FormRequest
{
    /**
     * 判断用户是否有权限进行此请求。
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
            'old_password' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed|different:old_password',
            'password_confirmation' => 'required|string|min:6',
        ];
    }

    /**
     * 定义字段名中文
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'old_password' => '旧密码',
            'password' => '密码',
            'password_confirmation' => '确认密码',
        ];
    }
}