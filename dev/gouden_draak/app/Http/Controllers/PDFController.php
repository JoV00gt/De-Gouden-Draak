<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        


        $data = ['title' => 'Bestelling van de Gouden Draak'];

        $pdf = PDF::loadView('pdf.order', $data);

        return $pdf->download('order.pdf');
    }
}
