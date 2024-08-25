<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SalesSummaryController extends Controller
{
    public function index()
    {
        $files = Storage::files('public/summaries');
        return view('summaries.index', compact('files'));
    }
}
