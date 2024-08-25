<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CocktailController extends Controller
{
    public function index()
    {
        try {
            $response = Http::get('https://www.thecocktaildb.com/api/json/v1/1/search.php?f=m');
    
            if ($response->successful()) {
                $cocktails = $response->json();
                $cocktails = $cocktails['drinks'];
            }
            else {
                $cocktails = [];
                Log::error('Failed to fetch cocktails. API responded with status: ' . $response->status());
            }

        } catch (\Exception $e) {
            $cocktails = [];
            Log::error('An exception occurred while fetching cocktails: ' . $e->getMessage());
        }
        return view('cocktails.index')->with(compact('cocktails'));

    }
}
