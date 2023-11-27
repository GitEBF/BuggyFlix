<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GenreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'genre_id' => 'required',
            'film_id' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'genre_id.required' => 'Sélectionner un genre dans la liste',
            'film_id.required' => 'Sélectionner un film dans la liste'
        ];
    }
}