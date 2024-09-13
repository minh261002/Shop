<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            "user_catalogue_id.required" => "Vui lòng chọn nhóm thành viên",
            "user_catalogue_id.not_in" => "Vui lòng chọn nhóm thành viên",
        ];
    }
}