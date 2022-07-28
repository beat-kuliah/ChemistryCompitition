<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;

class DownloadController extends Controller
{

    public function index($id)
    {
        $fileName = 'buku_panduan/' . $id . '.pdf';
        $headers = ['Content-Type: application/pdf'];
        $path = storage_path($fileName);

        // dd($path);
        $result = Response()->download($path);

        return $result;
    }
    
}
