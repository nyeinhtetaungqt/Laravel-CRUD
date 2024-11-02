<?php

namespace App\Http\Controllers;

use App\Models\Bottle;
use Illuminate\Http\Request;

class BottleController extends Controller
{
    public function index()
    {
        $bottles = Bottle::all();
        return view('bottles.index', ['bottles' => $bottles]);
    }

    public function create()
    {
        return view('bottles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $newBottle = Bottle::create($data);
        return redirect(route('bottle.index'));
    }

    public function edit(Bottle $bottle)
    {
        return view('bottles.edit', ['bottle' => $bottle]);
    }

    public function update(Bottle $bottle, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $bottle->update($data);

        return redirect(route('bottle.index'))->with('success', 'Updated successfully');
    }

    public function delete(Bottle $bottle)
    {
        $bottle->delete();
        return redirect(route('bottle.index'))->with('success', 'Deleted successfully');
    }
}
