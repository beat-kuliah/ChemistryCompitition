<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CIPController extends Controller
{
    public function index()
    {
        return view('cip.index');
    }
}
