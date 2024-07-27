<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
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
            'titulo' => 'required',
            'description' => 'required',
            'image' => [$this->route('servicio') ? 'nullable' : 'required', 'mimes:jpeg,png',],
        ];
    }

    public function messages(){
        return [
            'titulo.required' => 'El campo titulo es obligatorio',
            'description.required' => 'El campo descripcion es obligatorio',
            'image.required' => 'Seleccione una imagen'
        ];
    }
}