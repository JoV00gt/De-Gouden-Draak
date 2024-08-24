<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function index()
    {
        $cocktails = Http::get('www.thecocktaildb.com/api/json/v1/1/search.php?f=a')->json();
        $cocktails = $cocktails['drinks'];
        return view('cocktails.index')->with(compact('cocktails'));
    }
}
