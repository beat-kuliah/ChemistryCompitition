<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Competition;
use App\Models\Sponsor;
use App\Models\Partner;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function landing_page()
    {
        $sponsor = Sponsor::get();
        $partner = Partner::get();

        $data = [
            'sponsor' => $sponsor,
            'partner' => $partner,
        ];

        return view('landing_page.index', $data);
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

            $payment->move($path, $fileNamePayment);

            DB::commit();
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

    public function store_abstrak(Request $req, $id)
    {
        $path = storage_path('upload/abstrak');

        $time = Carbon::now()->format('dmYhisu');
        $abstrak = $req->file('bukti');
        $fileNameAbstrak = $time . '.' . $abstrak->getClientOriginalExtension();

        $bukti = [
            'status' => 5,
            'abstrak' => $fileNameAbstrak,
            'updated_at' => Carbon::now()
        ];

        DB::beginTransaction();
        try {
            DB::table('competition')->where('id', '=', $id)->update($bukti);

            $abstrak->move($path, $fileNameAbstrak);

            DB::commit();

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

    public function list_pendaftaran()
    {
        $competition = Competition::where('created_by', Auth::user()->id)->get();

        $data = [
            'competition' => $competition,
        ];

        return view('list_pendaftaran.index', $data);
    }

    public function konfirmasi($id)
    {
        $competition = Competition::find($id);
        if($competition->status == 4){
            $competition->status = 1;
            $competition->lolos = 1;
            $competition->save();
        }else{
            $competition->status = 3;
            $competition->save();
        }

        return redirect()->back()->with('alert','Berhasil Update');
    }

    public function batalkan($id)
    {
        $competition = Competition::find($id);
        $competition->status = 0;
        $competition->save();

        return redirect()->back()->with('alert','Berhasil Update');
    }

    public function accept($id)
    {
        $competition = Competition::find($id);
        $competition->lolos = 1;
        $competition->save();

        return redirect(session('links')[0])->with('alert','Berhasil Update');
    }

    public function reject($id, Request $req)
    {
        $competition = Competition::find($id);
        $competition->alasan = $req->reason;
        $competition->lolos = 2;
        $competition->save();

        return redirect(session('links')[0])->with('alert','Berhasil Update');
    }
}
