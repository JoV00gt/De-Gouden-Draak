<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use App\Models\Dish;

class MenuController extends Controller
{
    public function index(): View 
    {
        $items = Dish::paginate(15);
        $items->setCollection($items->groupBy('dish'));

        return view('menu.index')->with(compact('items'));
    }
}
