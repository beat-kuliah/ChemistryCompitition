<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;

class AdminController extends Controller
{
    public function cc()
    {
        $data = Competition::where('chemistry_id', 5)->get();
        return view('admin.cc',[ 'data' => $data]);
    }

    public function cod()
    {
        $data = Competition::where('chemistry_id', 7)->get();
        return view('admin.cod',[ 'data' => $data]);
    }

    public function cip()
    {
        $data = Competition::where('chemistry_id', 6)->get();
        return view('admin.cip',[ 'data' => $data]);
    }

    public function semnas()
    {
        $data = Competition::where('chemistry_id', 8)->get();
        return view('admin.semnas',[ 'data' => $data]);
    }

    public function chempaign()
    {
        $data = Competition::where('chemistry_id', 9)->get();
        return view('admin.chempaign',[ 'data' => $data]);
    }

    public function detailCC($id)
    {
        $data = Competition::find($id);
        return view('admin.details.cc',[ 'data' => $data]);
    }

    public function detailCOD($id)
    {
        $data = Competition::find($id);
        return view('admin.details.cod',[ 'data' => $data]);
    }

    public function detailCIP($id)
    {
        $data = Competition::find($id);
        return view('admin.details.cip',[ 'data' => $data]);
    }

    public function detailSemnas($id)
    {
        $data = Competition::find($id);
        return view('admin.details.semnas',[ 'data' => $data]);
    }

    public function detailChempaign($id)
    {
        $data = Competition::find($id);
        return view('admin.details.chempaign',[ 'data' => $data]);
    }

}
