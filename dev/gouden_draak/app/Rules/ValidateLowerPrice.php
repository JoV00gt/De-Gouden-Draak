<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Dish;

class ValidateLowerPrice implements ValidationRule
{

    public $item;

    public function __construct($item)
    {
        $this->item = $item;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $currentPrice = Dish::where('id', $this->item)->value('price');

            if ($currentPrice !== null && $value >= $currentPrice) {
                $fail('The ' . $attribute . ' must be less than the price in the menu.');
            }
    }
}
