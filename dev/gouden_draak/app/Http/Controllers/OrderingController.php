<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Dish;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;

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

        $request->validate([
            'orderData' => 'required|array',
            'orderData.*.quantity' => 'required|min:1',
        ]);

        $order = Order::create([
            'date' => Carbon::now(),
        ]);

        foreach ($orderData as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'menu_id' => $item['id'],
                'amount' => $item['quantity'],
            ]);
        }

        return redirect()->route('order');
    }
}
