<?php

use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Console\Scheduling\Schedule;



/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

use Illuminate\Support\Facades\DB;

$schedule = new Schedule;
$schedule->call(function () {
    //total amount of sales
    $orders = Order::where('date', '>', Carbon::now()->subDay());
    $total_sales = 0;
    foreach ($orders as $order) {
        foreach ($order->items as $item) {
            $total_sales += $item->price;
        }
    }
    DB::table('salesreport')->insert([
        'date' => now(),
        'total_sales' => $total_sales,
        'total_sales_excl_btw' => $total_sales * 0.79,
        'total_btw' => $total_sales * 0.21,
        'total_profit' => $total_sales,
    ]);
})->everyMinute();
