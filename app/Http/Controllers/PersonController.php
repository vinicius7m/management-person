<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Person;

class PersonController extends Controller
{
    public function index() {
        $people = Pessoa::paginate(10);

        return view('')
    }
}
