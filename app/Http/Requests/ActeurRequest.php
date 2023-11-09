<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActeurRequest extends FormRequest
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
            'person_id' => 'required',
            'film_id' => 'required',
            'role' => 'required',
            'nomPersonnage' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'person_id.required' => 'Sélectionner un nom dans la liste',
            'film.required' => 'Sélectionner un film dans la liste',
            'role.required' => "Quel est le role de l'acteur?",
            'nomPersonnage.required' => 'Quel est le nom du personnage?',
        ];
    }
}