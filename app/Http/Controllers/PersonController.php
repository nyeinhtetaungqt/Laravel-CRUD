<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::all();
        return view('people.index', ['people' => $people]);
    }

    public function create()
    {
        return view('people.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'job' => 'required'
        ]);
        $newPerson = Person::create($data);
        return redirect(route('person.index'));
    }

    public function edit(Person $people)
    {
        return view('people.edit', ['people' => $people]);
    }

    public function update(Person $people, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'job' => 'required'
        ]);
        $people->update($data);
        return redirect(route('person.index'))->with('success', 'Updated successfully');
    }

    public function destroy(Person $people)
    {
        $people->delete();
        return redirect(route('person.index'))->with('success', 'Deleted successfully');
    }
}
