<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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

    public function setFileName($data)
    {
        $time = Carbon::now()->format('dmYhisu');
        $fileName = $time . '.' . $data->getClientOriginalExtension();
        return $fileName;
    }

    public function store_payment(Request $req, $id)
    {
        $path = storage_path('upload/payment');

        $time = Carbon::now()->format('dmYhisu');
        $payment = $req->file('bukti');
        $fileNamePayment = $time . '.' . $payment->getClientOriginalExtension();

        $bukti = [
            'status' => 2,
            'payment' => $fileNamePayment,
            'updated_at' => Carbon::now()
        ];

        DB::beginTransaction();
        try {
            DB::table('competition')->where('id', '=', $id)->update($bukti);

            DB::commit();

            $payment->move($path, $fileNamePayment);
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }

        $result = [
            'result' => 1,
            'id' => $id
        ];

        return $result;
    }
}
