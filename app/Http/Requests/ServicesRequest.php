<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
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
                            'name' => 'required|unique:services',
                            'price' =>'required'


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
            'name.required' => 'Tên dịch vụ không được để trống ',
            'name.unique' => 'Tên dịch vụ đã tồn tại ',
            'price.required' => 'Giá dịch vụ không được để trống ',



        ];
    }
}
