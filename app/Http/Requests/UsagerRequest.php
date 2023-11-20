<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required|confirmed',
            'date' => 'required'
        ];  

        
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Sélectionner un email dans la liste',
            'password.required' => 'Sélectionner un password dans la liste',
            'password_confirmation.required' => 'Sélectionner un check_password dans la liste',
            'date.required' => 'Sélectionner un date dans la liste',
            'confirm_password.confirmed' => 'confirm?'
        ];
    }
}
