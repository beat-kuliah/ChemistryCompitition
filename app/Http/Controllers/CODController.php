<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CODController extends Controller
{
    public function index()
    {
        return view('cod.index');
    }
}
