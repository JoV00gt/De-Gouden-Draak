<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Dish;
use App\Models\Deal;
use Carbon\Carbon;
use App\Rules\ValidateWeekAhead;
use App\Rules\ValidateLowerPrice;

class DealController extends Controller
{
    public function index(): View 
    {
        $deals = Deal::whereDate('expire_date', '>', Carbon::today())->with(['dish'])->get();

        return view('deals.index')->with(compact('deals'));
    }

    public function create(): View
    {
        $items = Dish::orderBy('addition')->orderBy('item_number')->get();

        return view('deals.create')->with(compact('items'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'start_date' => [
                'required',
                'date',
                'before_or_equal:end_date',
                new ValidateWeekAhead,
            ],
            'end_date' => 'required|date|after_or_equal:start_date',
            'price' => [
                'required',
                'numeric',
                'gt:0',
                new ValidateLowerPrice($request->dish),
            ] 
        ]);

        Deal::create([
            'menu_id' => $request->dish,
            'price' => $request->price,
            'start_date' => $request->start_date,
            'expire_date' => $request->end_date
        ]);

        return redirect()->route('deals.index')->with('success', 'Aanbieding is successvol toegevoegd'); //TODO: Translation
    }

    public function edit($id): View
    {
        $deal = Deal::with(['dish'])->findorFail($id);
        $items = Dish::orderBy('addition')->orderBy('item_number')->get();

        return view('deals.edit')->with(compact('deal', 'items'));
    }

    public function destroy($id): RedirectResponse 
    {
        $deal = Deal::findorFail($id);
        $deal->delete();

        return redirect()->route('deals.index')->with('success', 'Aanbieding is succesvol verwijderd'); //TODO: translation
    }
}
