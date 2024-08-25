<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    use HasFactory;

    public $table = 'salesreport';

    protected $fillable = [
        'date',
        'total_sales',
        'total_sales_excl_btw',
        'total_btw',
        'total_profit',
    ];
}
