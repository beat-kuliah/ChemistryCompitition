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
            'count' => count($news),
        ];

        return view('news.index', $data);
    }
}
