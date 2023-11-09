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
            'titre' => 'required|min:10|max:75',
            'resume' => 'required|min:10',
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
            'titre.required' => 'required',
            'resume.required' => 'required',
            'type.required' => 'required',
            'brand.required' => 'required',
            'pochette.required' => 'required',
            'cote.required' => 'required',
            'duree.required' => 'required',
            'rating.required' => 'required',
            'date.required' => 'required',
            'langue.required' => 'required',
            'subtitle.required' => 'required'
        ];
    }
}
