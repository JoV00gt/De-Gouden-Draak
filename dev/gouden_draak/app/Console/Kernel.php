<?php

namespace App\Console;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            //total amount of sales
            $orderIds = Order::whereBetween('date', [Carbon::today()->subDay(), Carbon::today()])->pluck('id');

            $items = OrderItem::whereIn(
                'order_id',
                $orderIds
            )->with(['order', 'dish'])->get();

            $total = $items->reduce(function ($carry, $item) {
                return $carry + ($item->dish->getFinalPriceAttribute($item->order->date) * $item->amount);
            }, 0);
            $totalXVat = ($total / 109) * 100;
            DB::table('salesreport')->insert([
                'date' => now(),
                'total_sales' => $total,
                'total_sales_excl_btw' => number_format($totalXVat, 2),
                'total_btw' => number_format($total * 0.09, 2),
                'total_profit' => $total,
            ]);
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
