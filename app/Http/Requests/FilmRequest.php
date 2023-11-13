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
            'pochette' => 'required',
            'cote' => 'required',
            'duree' => 'required',
            'rating' => 'required',
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
            'cote.required' => 'Veuillez insérer une cote',
            'duree.required' => 'Veuillez insérer une durée',
            'rating.required' => 'Veuillez insérer un rating',
            'date.required' => 'Veuillez insérer une date',
            'langue.required' => 'Veuillez insérer une langue',
            'subtitle.required' => 'Veuillez insérer un sous-titre'
        ];
    }
}
