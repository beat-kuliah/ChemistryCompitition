<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;
use Carbon\Carbon;
use Auth;
use DB;

class LiniMasaController extends Controller
{
    public function index()
    {
        $lini_masa = LiniMasa::orderBy('id')->get();

        $data = [
            'lini_masa' => $lini_masa,
        ];

        return view('admin.lini_masa.index', $data);
    }

    public function update(Request $req)
    {
        return $req;
    }
}
