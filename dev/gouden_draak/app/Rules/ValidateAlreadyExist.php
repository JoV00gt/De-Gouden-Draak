<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Deal;
use Carbon\Carbon;

class ValidateAlreadyExist implements ValidationRule
{

    protected $item;
    protected $startDate;
    protected $endDate;

    public function __construct($item, $startDate, $endDate) 
    {
        $this->item = $item;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $startDate = Carbon::parse($this->startDate)->startOfWeek();
        $endDate = Carbon::parse($this->endDate)->endOfWeek(); 

        $exists = Deal::where('menu_id', $this->item)->where(function($query) use ($startDate, $endDate) {
            $query->whereBetween('start_date', [$startDate, $endDate])
                  ->orWhereBetween('expire_date', [$startDate, $endDate]);
        })->exists();

        if($exists) {
            $fail('There is already a deal for this dish within the same week.');
        }
    }
}
