<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;

class CIPController extends Controller
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }
    public function index()
    {
        $lini_masa = LiniMasa::where('chemistry_id',  6)->orderBy('id', 'asc')->get();

        for($i = 0; $i < count($lini_masa); $i++){
            if($lini_masa[$i]->date_1 != null){
                $lini_masa[$i]->date_1 = $this->controller->setDateFormat($lini_masa[$i]->date_1);
            }
            if($lini_masa[$i]->date_2 != null){
                $lini_masa[$i]->date_2 = $this->controller->setDateFormat($lini_masa[$i]->date_2);
            }
            if($lini_masa[$i]->date_3 != null){
                $lini_masa[$i]->date_3 = $this->controller->setDateFormat($lini_masa[$i]->date_3);
            }
            if($lini_masa[$i]->date_4 != null){
                $lini_masa[$i]->date_4 = $this->controller->setDateFormat($lini_masa[$i]->date_4);
            }
        }

        $data = ['lini_masa' => $lini_masa,];

        return view('cip.index', $data);
    }

    public function create()
    {
        return view('cip.create');
    }
}
