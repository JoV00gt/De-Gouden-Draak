<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\View as ViewView;

class HomeController extends Controller
{
    public function Home()
    {
        return View('home');
    }
}
