<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;
use App\Models\Competition;
use Carbon\Carbon;
use DB;
use Auth;

class CODController extends Controller
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }
    public function index()
    {
        $lini_masa = LiniMasa::where('chemistry_id',  7)->orderBy('id', 'asc')->get();

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

        return view('cod.index', $data);
    }

    public function create()
    {
        return view('cod.create');
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

        $kartu_ketua = $req->file('kartu_pelajar_ketua');
        $fileNameKartuKetua = $this->controller->setFileName($kartu_ketua);
        
        $foto_ketua = $req->file('foto_ketua');
        $fileNameFotoKetua = $this->controller->setFileName($foto_ketua);

        $kartu_anggota1 = $req->file('kartu_pelajar_anggota1');
        $fileNameKartuAnggota1 = $this->controller->setFileName($kartu_anggota1);
        
        $foto_anggota1 = $req->file('foto_anggota1');
        $fileNameFotoAnggota1 = $this->controller->setFileName($foto_anggota1);

        $kartu_anggota2 = $req->file('kartu_pelajar_anggota2');
        $fileNameKartuAnggota2 = $this->controller->setFileName($kartu_anggota2);
        
        $foto_anggota2 = $req->file('foto_anggota2');
        $fileNameFotoAnggota2 = $this->controller->setFileName($foto_anggota2);

        $competition = [
            'id' => $id,
            'chemistry_id' => 7,
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
            'scan_kartu_pelajar' => $fileNameKartuKetua,
            'foto' => $fileNameFotoKetua,
            'no_identitas' => $req->no_iden_ketua,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $anggota1 = [
            'name' => $req->nama_anggota1,
            'competition_id' => $id,
            'person_type_id' => 2,
            'gender' => $req->jenis_kelamin_anggota1,
            'no_identitas' => $req->no_iden_anggota1,
            'scan_kartu_pelajar' => $fileNameKartuAnggota1,
            'foto' => $fileNameFotoAnggota1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $anggota2 = [
            'name' => $req->nama_anggota2,
            'competition_id' => $id,
            'person_type_id' => 2,
            'gender' => $req->jenis_kelamin_anggot2,
            'no_identitas' => $req->no_iden_anggota2,
            'scan_kartu_pelajar' => $fileNameKartuAnggota2,
            'foto' => $fileNameFotoAnggota2,
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
            DB::table('person')->insert($anggota1);
            DB::table('person')->insert($anggota2);
            DB::table('person')->insert($guru);

            $kartu_ketua->move($path, $fileNameKartuKetua);
            $foto_ketua->move($path, $fileNameFotoKetua);
            $kartu_anggota1->move($path, $fileNameKartuAnggota1);
            $foto_anggota1->move($path, $fileNameFotoAnggota1);
            $kartu_anggota2->move($path, $fileNameKartuAnggota2);
            $foto_anggota2->move($path, $fileNameFotoAnggota2);

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
        $price = '240.000';
        $linimasa = LiniMasa::where('chemistry_id', '=', 7)->orderBy('id', 'asc')->first();
        $check = Competition::where('status', '=', 3)
            ->where('chemistry_id', '=', '5')
            ->where('updated_at', '>=', $linimasa->date_1)
            ->where('updated_at', '<=', $linimasa->date_2)
            ->count();

        $success = Competition::find($id);

        if($check > 10){
            $price = '300.000';
        }

        $data = [
            'id' => $id,
            'price' => $price,
            'status' => $success->status,
        ];

        return view('cod.payment', $data);
    }

    
}
