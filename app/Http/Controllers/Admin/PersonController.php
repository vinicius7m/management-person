<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
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
}
