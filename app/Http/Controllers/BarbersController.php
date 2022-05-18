<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarbersController extends Controller
{
    public function index() {
        return view('pages.barbers.index');
    }
}
