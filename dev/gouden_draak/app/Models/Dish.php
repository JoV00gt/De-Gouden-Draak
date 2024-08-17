<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Dish extends Model
{
    use HasFactory;

    public $table = 'menu'; 

    protected $guarded = [];

    public $timestamps = true;

    protected $appends = ['final_price'];

    public function getFinalPriceAttribute()
    {
        $today = Carbon::today();

        // Find an active deal for today
        $deal = $this->deals()
                     ->whereDate('start_date', '<=', $today)
                     ->whereDate('expire_date', '>=', $today)
                     ->first();

        // Return the deal price if a deal exists, otherwise return the original price
        return $deal ? $deal->price : $this->price;
    }

    public function deals()
    {
        return $this->hasMany(Deal::class, 'menu_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'menu_id', 'id');
    }
}
