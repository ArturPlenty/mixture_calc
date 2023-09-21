<?php

namespace App\Http\Controllers;

use App\Models;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index() {

        return view('navigationViews.calculator');
    }

    public function show() {

        //! If-Statement for empty TextBoxes
        return redirect('calculator')->with('msg', request('name') . ' hat ' . request('liter') . ' liter');
    }
}
