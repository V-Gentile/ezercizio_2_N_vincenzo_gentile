<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DigimonEditRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2'],
            'level' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            
            // Rinominato in attribute_ids per evitare conflitti
            'attribute_ids' => ['nullable', 'array'],
            'attribute_ids.*' => ['exists:attributes,id']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il nome deve avere almeno 2 caratteri.',
            'level.required' => 'Il campo livello è obbligatorio.',
            'type.required' => 'Il campo tipo è obbligatorio.',
            'attribute_ids.array' => 'Formato degli attributi non valido.',
            'attribute_ids.*.exists' => 'Uno degli attributi selezionati non esiste.',
        ];
    }
}
