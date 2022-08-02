<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;
use App\Models\Regional;
use App\Models\Competition;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;
use DB;

class ChempaignController extends Controller
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function index()
    {
        $lini_masa = LiniMasa::where('chemistry_id',  9)->orderBy('id', 'asc')->get();

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

        return view('chempaign.index', $data);
    }

    public function create()
    {
        $regional = Regional::all();

        $data = [
            'regional' => $regional,
        ];

        return view('chempaign.create', $data);
    }

    public function store(Request $req)
    {

        $validated = $req->validate([
            'email' => ['required', 'email'],
        ]);

        $path = storage_path('upload/peserta');
        
        $c_id = DB::table('competition')->latest('id')->first();
        if($c_id != null){
            $id = (int)$c_id->id + 1;
        }else {
            $id = 1;
        }

        $kartu = $req->file('kartu');
        $fileName = $this->controller->setFileName($kartu);

        $competition = [
            'id' => $id,
            'chemistry_id' => $req->chempaign_type,
            'status' => 1,
            'school' => $req->instansi,
            'address' => $req->alamat,
            'regional_id' => $req->regional,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $ketua = [
            'name' => $req->nama_ketua,
            'competition_id' => $id,
            'person_type_id' => 1,
            'email' => $req->email,
            'no_telp' => $req->no_telp,
            'no_identitas' => $req->nim,
            'id_line' => $req->idLine,
            'gender' => $req->jenis_kelamin,
            'scan_kartu_pelajar' => $fileName,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        DB::beginTransaction();
        try {
            DB::table('competition')->insert($competition);
            DB::table('person')->insert($ketua);

            if($req->chempaign_type == 2){
                foreach ($req->nama_peserta as $key => $nama) {
                    DB::table('person')->insert([
                        'name' => $nama,
                        'competition_id' => $id,
                        'person_type_id' => 2,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()
                    ]);
                };
            };

            $kartu->move($path, $fileName);

            DB::commit();

        } catch (\Exception $e) {
            // DB::rollback();
            return $e;
        }

        $result = [
            'result' => 1,
            'id' => $id
        ];

        // return $req;
        return $result;
    }

    public function payment($id)
    {
        $success = Competition::find($id);

        $data = [
            'id' => $id,
            'status' => $success->status,
        ];

        return view('chempaign.payment', $data);
    }
}
