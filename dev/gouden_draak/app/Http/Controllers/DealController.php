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
use App\Rules\ValidateAlreadyExist;

class DealController extends Controller
{
    public function index(): View 
    {
        $deals = Deal::whereDate('expire_date', '>', Carbon::today())->with(['dish'])->orderBy('start_date')->get();

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
            'end_date' => [
                'required',
                'date',
                'after_or_equal:start_date',
                new ValidateAlreadyExist($request->dish, $request->start_date, $request->end_date)
            ],
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

        return redirect()->route('deals.index')->with('success', __('deals-success-add'));
    }

    public function edit($id): View
    {
        $deal = Deal::with(['dish'])->findorFail($id);
        $items = Dish::orderBy('addition')->orderBy('item_number')->get();

        return view('deals.edit')->with(compact('deal', 'items'));
    }

    public function update(Request $request, $id): RedirectResponse 
    {
        $request->validate([
            'start_date' => [
                'required',
                'date',
                'before_or_equal:end_date',
                new ValidateWeekAhead,
            ],
            'end_date' => [
                'required',
                'date',
                'after_or_equal:start_date',
            ],
            'price' => [
                'required',
                'numeric',
                'gt:0',
                new ValidateLowerPrice($request->dish),
            ] 
        ]);

        $deal = Deal::findOrFail($id);

        $deal->update([
            'menu_id' => $request->dish,
            'price' => $request->price,
            'start_date' => $request->start_date,
            'expire_date' => $request->end_date
        ]);

        return redirect()->route('deals.index')->with('success', __('deals-success-edit')); 
    }

    public function destroy($id): RedirectResponse 
    {
        $deal = Deal::findorFail($id);
        $deal->delete();

        return redirect()->route('deals.index')->with('success', __('deals-success-delete'));
    }

    public function deals(): View
    {
        $deals = Deal::whereDate('expire_date', '>', Carbon::today())->with(['dish'])->orderBy('start_date')->get();
        return view('deals.deals')->with(compact('deals'));
    }
}
