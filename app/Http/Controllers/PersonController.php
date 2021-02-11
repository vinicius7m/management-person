<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Person;

class PersonController extends Controller
{
    public function index() {
        $people = Person::paginate(10);

        return view('people.index', compact('people'));
    }

    public function create() {
        $people = Person::all(['id', 'name']);

        return view('people.create', compact('people'));
    }

    public function person(Request $request) {
        $data = $request->all();

        Person::create($data);

        return redirect()->route('people.index');

    }

    public function edit($person) {
        $person = Person::find($person);

        return view('people.edit', compact('person'));
    }

    public function update(Request $request, $person) {
        $data = $request->all();

        $person = Person::find($person);
        $person->update($data);

        return redirect()->route('people.index');
    }

    public function destroy($person) {
        $person = Person::find($person);
        $person->delete();

        return redirect()->route('people.index');
    }
}
