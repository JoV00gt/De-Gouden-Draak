<?php

namespace App\Http\Controllers;

use App\Models\SalesReport;
use Illuminate\Http\Request;
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
        $writer = new Xlsx($spreadsheet);
        $writer->save('salesreport.xlsx');
        return response()->download('salesreport.xlsx');
    }

}
