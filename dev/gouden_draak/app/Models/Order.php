<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = 'orders';

    protected $guarded = [];

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'id');
    }
}
