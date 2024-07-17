<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Dish;

class OrderingController extends Controller
{
    public function index(): View 
    {
        $items = Dish::all()->groupBy('dish');

        return view ('order')->with(compact('items'));
    }
}
