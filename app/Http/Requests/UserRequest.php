<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            //password deve ter no minimo 6 caracteres
            'password' => 'required|string|min:6',
            'email' => 'nullable|email|max:255|unique:users,email',
            'address' => 'required|string|max:255',
            'address2' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'cep' => 'required|string|regex:/^\d{5}-\d{3}$/',
            'same_address' => 'nullable|boolean',
            'save_info' => 'nullable|boolean',
        ];
    }

    public function messages():array
    {
        return[
            'first_name.required' => 'O primeiro nome é obrigatório.',
            'last_name.required' => 'O sobrenome é obrigatório.',
            'username.required' => 'O nome de usuário é obrigatório.',
            'username.unique' => 'Este nome de usuário já está em uso.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
            'email.email' => 'Insira um endereço de e-mail válido.',
            'email.unique' => 'Este e-mail já está em uso.',
            'address.required' => 'O endereço é obrigatório.',
            'country.required' => 'O país é obrigatório.',
            'estado.required' => 'O estado é obrigatório.',
            'cidade.required' => 'A cidade é obrigatória.',
            'cep.required' => 'O CEP é obrigatório.',
            'cep.regex' => 'O CEP deve estar no formato 00000-000.',
        ];
    }
}
