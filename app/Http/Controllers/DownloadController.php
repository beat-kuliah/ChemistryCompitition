<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Storage;

class DownloadController extends Controller
{

    public function index($id)
    {
        $fileName = 'public\\buku_panduan\\' . $id . '.pdf';
        $headers = ['Content-Type: application/pdf'];
        $path = public_path($fileName);

        $result = Response()->download($fileName);

        return $result;
    }
    
}
