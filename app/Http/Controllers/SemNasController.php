<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemNasController extends Controller
{
    public function index()
    {
        return view('semnas.index');
    }
}
