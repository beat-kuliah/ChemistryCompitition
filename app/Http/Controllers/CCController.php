<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;
use Carbon\Carbon;

class CCController extends Controller
{
    public function index()
    {
        $lini_masa = LiniMasa::get();
        $lini_masa[0]->gel_1_1 = $this->setDateFormat($lini_masa[0]->gel_1_1);
        $lini_masa[0]->gel_1_2 = $this->setDateFormat($lini_masa[0]->gel_1_2);
        $lini_masa[0]->gel_2_1 = $this->setDateFormat($lini_masa[0]->gel_2_1);
        $lini_masa[0]->gel_2_2 = $this->setDateFormat($lini_masa[0]->gel_2_2);
        $lini_masa[1]->tm_1 = $this->setDateFormat($lini_masa[1]->tm_1);
        $lini_masa[2]->pre = $this->setDateFormat($lini_masa[2]->pre);
        $lini_masa[2]->p_1 = $this->setDateFormat($lini_masa[2]->p_1);
        $lini_masa[3]->tm_2 = $this->setDateFormat($lini_masa[3]->tm_2);
        $lini_masa[4]->qf = $this->setDateFormat($lini_masa[4]->qf);
        $lini_masa[4]->p_2 = $this->setDateFormat($lini_masa[4]->p_2);
        $lini_masa[5]->sgf = $this->setDateFormat($lini_masa[5]->sgf);
        $lini_masa[5]->p_3 = $this->setDateFormat($lini_masa[5]->p_3);

        $data = ['lini_masa' => $lini_masa,];

        return view('cc.index', $data);
    }

    public function setDateFormat( $date ){
        $bulan = array (
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $date);
        return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
    }
}
