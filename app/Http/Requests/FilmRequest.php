<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            'titre' => 'required',
            'resume' => 'required',
            'type' => 'required',
            'brand' => 'required',
            'pochette' => 'required|image|mimes:png,jpeg,jpg,gif,jfif,webp|max:16384',
            'cote' => 'required',
            'duree' => 'required',
            'rating' => 'required|numeric|min:1|max:10',
            'date' => 'required',
            'langue' => 'required',
            'subtitle' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'titre.required' => 'Veuillez insérer un titre',
            'resume.required' => 'Veuillez insérer un résumé',
            'type.required' => 'Veuillez insérer un type',
            'brand.required' => 'Veuillez insérer un brand',
            'pochette.required' => 'Veuillez insérer une pochette',
            'pochette.max' => 'la taille de l\'image ne doit pas dépasser 16Mb',
            'pochette.mimes' => 'le type n\'est pas reconnu (png,jpg,gif,jfif,webp)',
            'cote.required' => 'Veuillez insérer une cote',
            'duree.required' => 'Veuillez insérer une durée',
            'rating.required' => 'Veuillez insérer un rating',
            'date.required' => 'Veuillez insérer une date',
            'langue.required' => 'Veuillez insérer une langue',
            'subtitle.required' => 'Veuillez insérer un sous-titre',
            'pochette.required' => 'Le champ image est obligatoire',
            'pochette.max' => 'la taille de l\'image ne doit pas dépasser 16Mb',
            'pochette.mimes' => 'le type n\'est pas reconnu (png,jpg,gif,jfif,webp)',
        ];
    }
}
