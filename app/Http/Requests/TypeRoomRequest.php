<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRoomRequest extends FormRequest
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
                            'name' => 'required|unique:room_types',


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
            'name.required' => 'Vui lòng nhập tên ',
            'name.unique' => 'Loại phòng đã tồn tại',


        ];
    }
}
