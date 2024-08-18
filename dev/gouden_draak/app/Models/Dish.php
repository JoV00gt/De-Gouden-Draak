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

    protected $appends = ['final_price', 'deal_start_date', 'deal_expire_date'];

    public function getFinalPriceAttribute($orderDate = null)
    {
        $date = $orderDate ? Carbon::parse($orderDate) : Carbon::today();

        $deal = $this->deals()
                     ->whereDate('start_date', '<=', $date)
                     ->whereDate('expire_date', '>=', $date)
                     ->first();

        return $deal ? $deal->price : $this->price;
    }

    public function getDealStartDateAttribute()
    {
        $today = Carbon::today();
        $deal = $this->deals()
                     ->whereDate('start_date', '<=', $today)
                     ->whereDate('expire_date', '>=', $today)
                     ->first();

        return $deal ? Carbon::parse($deal->start_date)->format('d-m-Y') : null;
    }

    public function getDealExpireDateAttribute()
    {
        $today = Carbon::today();
        $deal = $this->deals()
                     ->whereDate('start_date', '<=', $today)
                     ->whereDate('expire_date', '>=', $today)
                     ->first();

        return $deal ? Carbon::parse($deal->expire_date)->format('d-m-Y') : null;
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
