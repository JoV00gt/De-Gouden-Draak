<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    public $table = 'deals';

    protected $guarded = [];

    public $timestamps = false;

    public function dish()
    {
        return $this->belongsTo(Dish::class, 'menu_id', 'id');
    }
}
