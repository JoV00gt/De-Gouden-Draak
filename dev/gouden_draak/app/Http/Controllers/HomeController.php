<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Deal;
use Carbon\Carbon;
use Illuminate\View\View as ViewView;

class HomeController extends Controller
{
    public function home()
    {
        $deal = Deal::whereDate('expire_date', '>', Carbon::today())->with(['dish'])->orderBy('start_date')->first();

        return view('home')->with(compact('deal'));
    }
}
