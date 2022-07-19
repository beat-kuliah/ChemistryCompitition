<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CCController extends Controller
{
    public function index()
    {
        return view('cc.index');
    }
}
