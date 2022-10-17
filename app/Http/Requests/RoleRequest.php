<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
        $rules = [
            'name' => 'required'
        ];

        return $rules;
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Bidang Isian Nama Wajib Diisi'
        ];

        return $messages;
    }
}
