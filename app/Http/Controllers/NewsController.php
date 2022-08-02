<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::get();

        $data = [
            'news' => $news,
        ];
        
        return view('news.index', $data);
    }
}
