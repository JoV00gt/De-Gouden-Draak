<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Carbon\Carbon;

class ValidateWeekAhead implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $minDate = Carbon::now()->addWeek();
        if(!Carbon::parse($value)->gte($minDate)){
                $fail('The :attribute must be at least a week ahead.');
        }
    }
}
