<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DigimonRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2'],
            'level' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'img' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], 
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il nome deve avere almeno 2 caratteri.',
            'level.required' => 'Il campo livello è obbligatorio.',
            'type.required' => 'Il campo tipo è obbligatorio.',
            'img.required' => 'L\'immagine del Digimon è obbligatoria.',
            'img.image' => 'Il file deve essere un\'immagine.',
            'img.mimes' => 'L\'immagine deve essere in formato jpeg, png, jpg, gif o svg.',
        ];
    }
}
