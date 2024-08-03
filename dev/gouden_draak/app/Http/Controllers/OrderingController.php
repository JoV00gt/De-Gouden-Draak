<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Dish;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

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

        $rules = [
            'orderData' => ['required', 'array', function ($attribute, $value, $fail) {
                if (count($value) === 0) {
                    $fail('The ' . $attribute . ' array must contain at least one item.');
                }
            }],
            'orderData.*.quantity' => 'required|integer|min:1',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

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
