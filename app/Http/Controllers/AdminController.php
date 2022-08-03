<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\News;

class AdminController extends Controller
{
    public function cc()
    {
        $data = Competition::where('chemistry_id', 5)->get();
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); 
        array_unshift($links, $currentLink); 
        session(['links' => $links]);
        return view('admin.cc',[ 'data' => $data]);
    }

    public function cod()
    {
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); 
        array_unshift($links, $currentLink); 
        session(['links' => $links]);

        $data = Competition::where('chemistry_id', 7)->get();
        return view('admin.cod',[ 'data' => $data]);
    }

    public function cip()
    {
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); 
        array_unshift($links, $currentLink); 
        session(['links' => $links]);

        $data = Competition::where('chemistry_id', 6)->get();
        return view('admin.cip',[ 'data' => $data]);
    }

    public function semnas()
    {
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); 
        array_unshift($links, $currentLink); 
        session(['links' => $links]);

        $data = Competition::where('chemistry_id', 8)->get();
        return view('admin.semnas',[ 'data' => $data]);
    }

    public function chempaign()
    {
        $links = session()->has('links') ? session('links') : [];
        $currentLink = request()->path(); 
        array_unshift($links, $currentLink); 
        session(['links' => $links]);
        
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

    public function news()
    {
        $data = News::all();
        return view('admin.news', [ 'data' => $data]);
    }

    public function CreateNews()
    {
        return view('admin.news_add');
    }

    public function detailNews($id)
    {
        $news = News::find($id);
        return view('admin.news_update', [ 'news' => $news]);
        
    }

    public function newsUpdate($id ,Request $req)
    {
        $news = News::find($id);

        if($req->file != null){
            $file= $req->file('file');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('upload'), $filename);

        } else {
            $filename = $news->image;
        }

        $news->title = $req->title;
        $news->image = $filename;
        $news->description = $req->desc;
        
        $news->save();

        return redirect('/admin/news')->with('alert', 'Updated!');
    }

    public function newsDelete($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect()->back();

    }

    public function newsUpload(Request $req)
    {
        $req->validate([
            'title' => 'required',
            'file' => 'required',
            'desc' => 'required'
        ]);

        $file= $req->file('file');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('upload'), $filename);

        $news = new News([
            "title" => $req->title,
            "image" => $filename,
            "description" => $req->desc,
        ]);
        
        $news->save();
        
        return redirect('/admin/news')->with('alert', 'Uploaded!');

    }


}
