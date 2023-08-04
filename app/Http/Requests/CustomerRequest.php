<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $rules = [];
        $currentAction = $this->route()->getActionMethod();

        switch ($this->method()) {
            case 'POST':
                switch ($currentAction) {
                    case 'add':
                        $rules = [
                            'name' => 'required',
                            'birth' =>'required',
                            'image' =>'required',
                            'address' =>'required',
                            'gender' =>'required',
                            'email' =>'required|unique:customers',
                            'phone' =>'required|unique:customers|',
                            'username' =>'required|unique:customers',
                            'password' =>'required|min:8'



                        ];
                        break;
                    default:
                        break;
                }
                break;
        }

        return $rules;
    }
    public function messages():array
    {
        return [
            'name.required' => 'Tên bạn không được để trống ',
            'birth.required' => 'Năm sinh không được để trống ',
            'address.required' => 'Địa chỉ không được để trống ',
            'email.required' => 'Email không được để trống ',
            'image.required' => 'Image không được để trống ',
            'gender.required' => 'Bạn chưa chọn giới tính ',

            'phone.required' => 'SDT không được để trống ',
            'username.required' => 'Tên đăng nhập không được để trống ',
            'password.required' => 'Mật khẩu không được để trống ',
            'password.min' => 'Mật khẩu không được ít hơn 8 kí tự ',

            'phone.unique' => 'SDT đã tồn tại vui lòng nhập SDT khác ',
            'username.unique' => 'Tên đăng nhập đã tồn tại vui lòng nhập tên khác ',
            'email.unique' => 'Email đã tồn tại ',
        ];
    }
}
