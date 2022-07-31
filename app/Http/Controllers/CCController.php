<?php

namespace App\Http\Controllers;

use App\Models\LiniMasa;
use App\Models\Regional;
use App\Models\Competition;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Auth;

class CCController extends Controller
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function index()
    {
        $lini_masa = LiniMasa::where('chemistry_id',  5)->orderBy('id', 'asc')->get();

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

        $data = [
            'lini_masa' => $lini_masa,
        ];

        return view('cc.index', $data);
    }

    public function create()
    {
        $regional = Regional::all();

        $data = [
            'regional' => $regional,
        ];

        return view('cc.create', $data);
    }

    public function store(Request $req)
    {

        $validated = $req->validate([
            'email_ketua' => ['required', 'email'],
            'email_guru' => ['required', 'email'],
        ]);

        $path = storage_path('upload/peserta');
        
        $c_id = DB::table('competition')->latest('id')->first();
        if($c_id != null){
            $id = (int)$c_id->id + 1;
        }else {
            $id = 1;
        }

        $time1 = Carbon::now()->format('dmYhisu');
        $kartu = $req->file('kartu_pelajar');
        $fileNameKartu = $time1 . '.' . $kartu->getClientOriginalExtension();
        
        $time2 = Carbon::now()->format('dmYhisu');
        $foto = $req->file('foto');
        $fileNameFoto = $time2 . '.' . $foto->getClientOriginalExtension();

        $competition = [
            'id' => $id,
            'chemistry_id' => 5,
            'school' => $req->asal_sekolah,
            'regional_id' => $req->regional,
            'status' => 1,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $ketua = [
            'name' => $req->nama_ketua,
            'competition_id' => $id,
            'person_type_id' => 1,
            'gender' => $req->jenis_kelamin_ketua,
            'email' => $req->email_ketua,
            'no_telp' => $req->no_ketua,
            'scan_kartu_pelajar' => $fileNameKartu,
            'foto' => $fileNameFoto,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $anggota = [
            'name' => $req->nama_anggota,
            'competition_id' => $id,
            'person_type_id' => 2,
            'gender' => $req->jenis_kelamin_anggota,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $guru = [
            'name' => $req->nama_guru,
            'competition_id' => $id,
            'person_type_id' => 3,
            'email' => $req->email_guru,
            'no_telp' => $req->no_guru,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        DB::beginTransaction();
        try {
            DB::table('competition')->insert($competition);
            DB::table('person')->insert($ketua);
            DB::table('person')->insert($anggota);
            DB::table('person')->insert($guru);

            $kartu->move($path, $fileNameKartu);
            $foto->move($path, $fileNameFoto);

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

    public function payment($id)
    {
        $success = Competition::find($id);

        $data = [
            'id' => $id,
            'status' => $success->status,
        ];

        return view('cc.payment', $data);
    }
}
