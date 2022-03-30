<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetHaircutController extends Controller
{
    public function index() {
        return view('pages.get-haircut.index');
    }
}
