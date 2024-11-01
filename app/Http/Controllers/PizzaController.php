<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use App\Models\Product;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = Pizza::all();
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $newProduct = Pizza::create($data);
        return redirect(route('pizza.index'));
    }

    public function edit(Pizza $pizza)
    {
        return view('pizzas.edit', ['pizza' => $pizza]);
    }

    public function update(Pizza $pizza, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);

        $pizza->update($data);
        return redirect(route('pizza.index'))->with('success', 'Pizza order change successfully');
    }

    public function destroy(Pizza $pizza)
    {
        $pizza->delete();
        return redirect(route('pizza.index'))->with('success', 'Pizza order cancel successfully');
    }
}
