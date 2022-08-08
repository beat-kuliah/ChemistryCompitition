<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Auth;

class SemNasController extends Controller
{
    private $controller;

    public function __construct()
    {
        $this->controller = new Controller();
    }

    public function index()
    {
        $lini_masa = LiniMasa::where('chemistry_id',  8)->orderBy('id', 'asc')->get();

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

        return view('semnas.index', $data);
    }

    public function create()
    {
        return view('semnas.create');
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

        $mention = $req->file('bukti');
        $fileName1 = $this->controller->setFileName($mention);
        $twibon = $req->file('twibon');
        $fileName2 = $this->controller->setFileName($twibon);
        $scan = $req->file('scan');
        $fileName3 = $this->controller->setFileName($scan);

        $competition = [
            'id' => $id,
            'chemistry_id' => 8,
            'status' => 4,
            'school' => $req->instansi,
            'poster' => $fileName1,
            'twibon' => $fileName2,
            'created_by' => Auth::user()->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        $person = [
            'name' => $req->nama_lengkap,
            'competition_id' => $id,
            'person_type_id' => 1,
            'email' => $req->email,
            'no_telp' => $req->no_telp,
            'no_identitas' => $req->nim,
            'mahasiswa' => $req->status_sekolah,
            'scan_kartu_pelajar' => $fileName3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        DB::beginTransaction();
        try {
            DB::table('competition')->insert($competition);
            DB::table('person')->insert($person);

            $mention->move($path, $fileName1);
            $twibon->move($path, $fileName2);
            $scan->move($path, $fileName3);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }

        $result = [
            'result' => 1,
            'id' => $id
        ];

        // return $req;
        return $result;
    }

    public function finish()
    {
        return view('semnas.finish');
    }

}
