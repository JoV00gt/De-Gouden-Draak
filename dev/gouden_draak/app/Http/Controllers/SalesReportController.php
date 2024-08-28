<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\SalesReport;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class SalesReportController extends Controller
{
    public function index()
    {
        return view('salesreport.index')->with('reports', SalesReport::all());
    }

    public function createSalesExcel($id)
    {
        //total
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A1', 'Date');
        $sheet->setCellValue('B1', 'Total Sales');
        $sheet->setCellValue('C1', 'Total Sales Excl BTW');
        $sheet->setCellValue('D1', 'Total BTW');
        $sheet->setCellValue('E1', 'Total Profit');
        $report = SalesReport::find($id);
        $row = 2;
        $sheet->setCellValue('A' . $row, $report->date);
        $sheet->setCellValue('B' . $row, $report->total_sales);
        $sheet->setCellValue('C' . $row, $report->total_sales_excl_btw);
        $sheet->setCellValue('D' . $row, $report->total_btw);
        $sheet->setCellValue('E' . $row, $report->total_profit);

        //orders
        $row += 1;
        $sheet->setCellValue('A' . $row, "Orders");
        $orders = Order::where('date', '>', Carbon::now()->subDay());
        $row += 1;

        $orderIds = Order::whereBetween('date', [Carbon::today()->subDay(), Carbon::today()])->pluck('id');
        $items = OrderItem::whereIn('order_id', $orderIds)->with(['order', 'dish'])->get();

        //make headers for orders
        $sheet->setCellValue('A' . $row, 'Date');
        $sheet->setCellValue('B' . $row, 'Dish');
        $sheet->setCellValue('C' . $row, 'Amount');
        $sheet->setCellValue('D' . $row, 'Price');
        $sheet->setCellValue('E' . $row, 'Total Price');
        $row += 1;
        foreach ($items as $item) {
            $sheet->setCellValue('A' . $row, $item->order->date);
            $sheet->setCellValue('B' . $row, $item->dish->name);
            $sheet->setCellValue('C' . $row, $item->amount);
            $sheet->setCellValue('D' . $row, $item->dish->getFinalPriceAttribute($item->order->date));
            $sheet->setCellValue('E' . $row, $item->dish->getFinalPriceAttribute($item->order->date) * $item->amount);
            $row += 1;
        }

        foreach ($sheet->getColumnIterator() as $column) {
            $sheet->getColumnDimension($column->getColumnIndex())->setAutoSize(true);
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save('salesreport.xlsx');
        return response()->download('salesreport.xlsx');
    }
}
