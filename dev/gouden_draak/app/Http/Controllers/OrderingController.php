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

    public function store(Request $request) 
    {
        $orderData = $request->input('orderData');

        $validated = $request->validate([
            'orderData' => 'required|array',
            'orderData.*.quantity' => 'required|min=1',
        ]);
    }
}
