<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Password implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[@#$%^&+=!])\s?.{8,16}$/', $value)){
            $fail('Invalid password');
        }
    }
}
