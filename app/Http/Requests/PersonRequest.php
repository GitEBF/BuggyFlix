<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'nom' => 'required',
            'dateNaissance' => 'required',
            'lieuNaissance' => 'required',
            'img' => 'required|image|mimes:png,jpeg,jpg,gif,jfif,webp|max:4096',
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire',
            'dateNaissance.required' => 'Le champ date de naissance est obligatoire',
            'lieuNaissance.required' => 'Le champ du lieu de naissance est obligatoire',
            'img.required' => 'Le champ image est obligatoire',
            'img.max' => 'la taille de l\'image ne doit pas dépasser 4096Kb',
            'img.mimes' => 'le type n\'est pas reconnu (png,jpg,gif,jfif,webp)'
        ];
    }
}
