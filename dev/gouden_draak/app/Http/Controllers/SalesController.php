<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Dish;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;

class SalesController extends Controller
{
    public function index(): View 
    {
        return view('sales');
    }

    public function overview(Request $request): View 
    {
        $request->validate([
            'begindate' => 'required|date|before_or_equal:enddate',
            'enddate' => 'required|date|after_or_equal:begindate',
        ]);

        $orderIds = Order::whereBetween('date', [$request->begindate, $request->enddate])->pluck('id');

        $items = OrderItem::whereIn('order_id', $orderIds)->with(['order', 'dish'])->get();

        $total = $items->reduce(function ($carry, $item) {
            return $carry + ($item->dish->getFinalPriceAttribute($item->order->date) * $item->amount);
        }, 0);
        $totalXVat = ($total/106)*100;

        return view('sales', ['items' => $items, 'total' => $total, 'exVat' => $totalXVat]);
    }
}
