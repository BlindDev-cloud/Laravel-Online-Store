<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Phone;
use App\Rules\Password;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:50'],
            'surname' => ['required', 'string', 'min:2', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'phone' => ['required', 'string', 'max:15', 'unique:users,phone', new Phone()],
            'birthday' => ['required' , 'date', 'before_or_equal:-18 years'],
            'password' => ['required', 'string', 'confirmed', new Password()]
        ];
    }
}
