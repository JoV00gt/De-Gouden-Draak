<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Dish;
use App\Models\DishType;
use Illuminate\Validation\Rule;

class MenuController extends Controller
{
    public function index(): View 
    {
        $items = Dish::orderBy('addition')
        ->orderBy('item_number')
        ->paginate(15);

        return view('menu.index')->with(compact('items'));
    }

    public function create(): View 
    {
        $categories = DishType::all();

        return view('menu.create')->with(compact('categories'));
    }

    public function store(Request $request): RedirectResponse 
    {
        $request->validate([
            'name' => 'required',
            'description' => 'max:255',
            'price' => 'required|numeric|gt:0', 
            'category' => 'required_without:new_category|nullable|exists:dishes,name',
            'new_category' => [
                'required_without:category',
                'nullable',
                'max:50',
                Rule::unique('dishes', 'name')
            ]
        ]);

        if($request->category != null) {
            $category = $request->category;

            $lastDish = Dish::where('dish', $category)->orderBy('item_number', 'desc')->first();
            $addition = $lastDish->addition;
            $item_number = $lastDish->item_number + 1;

        } else {
            $category = $request->new_category;
            $this->storeNewCategory($category);

            $lastAdditon = Dish::select('addition')->distinct()->get()->sortByDesc(function ($dish) {
                return strlen($dish->addition);
            })->sortByDesc('addition')->first();

            $addition = ++$lastAdditon->addition;
            $item_number = 1;
        }

        Dish::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'dish' => $category,
            'item_number' => $item_number,
            'addition' => $addition
        ]);

        return redirect()->route('menu.index')->with('success', 'Gerecht is succesvol toegevoegd');  
    }

    public function edit($id): View 
    {
        $dish = Dish::findorFail($id);
        $categories = DishType::all();

        return view('menu.edit')->with(compact('dish', 'categories'));
        
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'description' => 'max:255',
            'price' => 'required|numeric|gt:0',
            'category' => 'required_without:new_category|nullable|exists:dishes,name',
        ]);

        $dish = Dish::findOrFail($id);

        if($dish->dish != $request->category) {

            Dish::where('dish', $dish->dish)->where('id', '!=', $dish->id)
                ->orderBy('item_number')->get()
                ->each(function($item, $index){
                    $item->update([
                        'item_number' => $index + 1
                    ]);
                });

            $lastDish = Dish::where('dish', $request->category)->orderBy('item_number', 'desc')->first();
            $dish->update([
                'item_number' => $lastDish->item_number + 1,
                'addition' => $lastDish->addition,
            ]);  
        }

        $dish->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'dish' => $request->category,
        ]);

        return redirect()->route('menu.index')->with('success', 'Gerecht is succesvol aangepast');
    }

    public function destroy($id): RedirectResponse 
    {
        $dish = Dish::findorFail($id);
        $category = $dish->dish;

        $dish->delete();

        Dish::where('dish', $category)->orderBy('item_number')->get()
        ->each(function ($item, $index) {
            $item->update([
                'item_number' => $index + 1
            ]);
        });

        return redirect()->route('menu.index')->with('success', 'Gerecht is succesvol verwijderd');
    }

    public function storeNewCategory($category): Void 
    {
        DishType::create(['name' => $category]);
    }
}
