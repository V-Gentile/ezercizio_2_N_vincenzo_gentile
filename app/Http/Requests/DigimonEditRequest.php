<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class DigimonEditRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2'],
            'level' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il campo nome è obbligatorio.',
            'name.min' => 'Il nome deve avere almeno 2 caratteri.',
            'level.required' => 'Il campo livello è obbligatorio.',
            'type.required' => 'Il campo tipo è obbligatorio.',
        ];
    }
}
