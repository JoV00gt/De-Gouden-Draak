<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Rules\ValidOrderData;
use Illuminate\Support\Facades\Validator;
use App\Models\Dish;
use App\Models\Deal;
use PDF;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function generatePDF(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'orderData' => [new ValidOrderData]
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMessage = implode(' ,', $errors);

            return redirect()->route('order')
                ->with('error', $errorMessage);
        }

        if (!Storage::exists('storage/orders')) {
            Storage::makeDirectory('storage/orders');
        }

        $filename = 'order-' . Carbon::now() . '.pdf';
        $path = 'storage' . DIRECTORY_SEPARATOR . 'orders' . DIRECTORY_SEPARATOR . $filename;

        $orderData = json_decode($request->orderData, true);
        $total = $this->getTotal(collect($orderData));
        $data = ['title' => 'Bestelling van de Gouden Draak', 'items' => $orderData, 'total' => $total];

        $pdf = PDF::loadView('pdf.order', $data);
        Storage::put($path, $pdf->output());

        return $pdf->download($filename);
    }

    public function generateMenuPDF()
    {
        if (!Storage::exists('storage/orders')) {
            Storage::makeDirectory('storage/orders');
        }

        $filename = 'menu.pdf';
        $path = 'storage' . DIRECTORY_SEPARATOR . 'menu' . DIRECTORY_SEPARATOR . $filename;

        $items = Dish::orderBy('addition')->orderBy('item_number')->get();
        $deals = Deal::whereDate('expire_date', '>', Carbon::today())->with(['dish'])->orderBy('start_date')->get();
        $data = ['title' => 'Menu van de Gouden Draak', 'items' => $items, 'deals' => $deals];

        $pdf = PDF::loadView('pdf.menu', $data);
        Storage::put($path, $pdf->output());

        return $pdf->download($filename);
    }


    public function getTotal($items) 
    {
        $total = $items->sum(function ($item) {
            return $item['final_price'] * $item['quantity'];
        });
        
        return number_format($total, 2, ',', '.');;
    }
}
