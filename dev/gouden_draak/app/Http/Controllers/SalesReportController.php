<?php

namespace App\Http\Controllers;

use App\Models\SalesReport;
use Illuminate\Http\Request;

class SalesReportController extends Controller
{
    public function index()
    {
        return view('salesreport.index')->with('reports', SalesReport::all());
    }

}
