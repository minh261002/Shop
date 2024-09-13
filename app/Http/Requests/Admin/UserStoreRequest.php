<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:6",
            "password_confirmation" => "required|same:password",
            "user_catalogue_id" => "required|not_in:0",
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */

    public function messages(): array
    {
        return [
            "name.required" => "Vui lòng nhập họ tên",
            "email.required" => "Vui lòng nhập email",
            "email.email" => "Email không đúng định dạng",
            "password.required" => "Vui lòng nhập mật khẩu",
            "password.min" => "Mật khẩu phải có ít nhất 6 ký tự",
            "password_confirmation.required" => "Vui lòng nhập lại mật khẩu",
            "password_confirmation.same" => "Mật khẩu không khớp",
            "user_catalogue_id.required" => "Vui lòng chọn nhóm thành viên",
            "user_catalogue_id.not_in" => "Vui lòng chọn nhóm thành viên",
        ];
    }
}