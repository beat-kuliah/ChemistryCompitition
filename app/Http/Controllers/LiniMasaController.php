<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LiniMasa;
use Carbon\Carbon;
use Auth;
use DB;

class LiniMasaController extends Controller
{
    public function index()
    {
        $lini_masa = LiniMasa::orderBy('id')->get();

        $data = [
            'lini_masa' => $lini_masa,
        ];

        return view('admin.lini_masa.index', $data);
    }

    public function update(Request $req)
    {
        $type = $req->chemistry_type;

        if($type == 5){
            $value = $this->cc($req);
        }else if($type == 6){
            $value = $this->cip($req);
        }else if($type == 7){
            $value = $this->cod($req);
        }else if($type == 8){
            $value = $this->semnas($req);
        }else if($type == 9){
            $value = $this->chempaign($req);
        }else {
            $value = 0;
        }

        return $value;
    }

    public function cc($data)
    {
        DB::beginTransaction();
        try {
            DB::table('lini_masa')->where('id', '=', 1)->update([
                'date_1' => $data->date_1[0],
                'date_2' => $data->date_1[1],
                'date_3' => $data->date_1[2],
                'date_4' => $data->date_1[3],
            ]);

            DB::table('lini_masa')->where('id', '=', 2)->update([
                'date_1' => $data->date_1[4],
            ]);

            DB::table('lini_masa')->where('id', '=', 3)->update([
                'date_1' => $data->date_1[5],
                'date_2' => $data->date_1[6],
            ]);

            DB::table('lini_masa')->where('id', '=', 4)->update([
                'date_1' => $data->date_1[7],
            ]);

            DB::table('lini_masa')->where('id', '=', 5)->update([
                'date_1' => $data->date_1[8],
                'date_2' => $data->date_1[9],
            ]);

            DB::table('lini_masa')->where('id', '=', 6)->update([
                'date_1' => $data->date_1[10],
                'date_2' => $data->date_1[11],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
        
        return 1;
    }

    public function cod($data)
    {
        DB::beginTransaction();
        try {
            DB::table('lini_masa')->where('id', '=', 7)->update([
                'date_1' => $data->date_1[0],
                'date_2' => $data->date_1[1],
                'date_3' => $data->date_1[2],
                'date_4' => $data->date_1[3],
            ]);

            DB::table('lini_masa')->where('id', '=', 8)->update([
                'date_1' => $data->date_1[4],
                'date_2' => $data->date_1[5],
            ]);

            DB::table('lini_masa')->where('id', '=', 9)->update([
                'date_1' => $data->date_1[6],
            ]);

            DB::table('lini_masa')->where('id', '=', 10)->update([
                'date_1' => $data->date_1[7],
            ]);

            DB::table('lini_masa')->where('id', '=', 11)->update([
                'date_1' => $data->date_1[8],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
        
        return 1;
    }
    
    public function cip($data)
    {
        DB::beginTransaction();
        try {
            DB::table('lini_masa')->where('id', '=', 12)->update([
                'date_1' => $data->date_1[0],
                'date_2' => $data->date_1[1],
            ]);

            DB::table('lini_masa')->where('id', '=', 13)->update([
                'date_1' => $data->date_1[2],
                'date_2' => $data->date_1[3],
                'date_3' => $data->date_1[4],
            ]);

            DB::table('lini_masa')->where('id', '=', 14)->update([
                'date_1' => $data->date_1[5],
                'date_2' => $data->date_1[6],
                'date_3' => $data->date_1[7],
            ]);

            DB::table('lini_masa')->where('id', '=', 15)->update([
                'date_1' => $data->date_1[8],
            ]);

            DB::table('lini_masa')->where('id', '=', 16)->update([
                'date_1' => $data->date_1[9],
                'date_2' => $data->date_1[10],
            ]);

            DB::table('lini_masa')->where('id', '=', 17)->update([
                'date_1' => $data->date_1[11],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
        
        return 1;
    }

    public function semnas($data)
    {
        DB::beginTransaction();
        try {
            DB::table('lini_masa')->where('id', '=', 18)->update([
                'date_1' => $data->date_1[0],
            ]);

            DB::table('lini_masa')->where('id', '=', 19)->update([
                'date_1' => $data->date_1[1],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
        
        return 1;
    }

    public function chempaign($data)
    {
        DB::beginTransaction();
        try {
            DB::table('lini_masa')->where('id', '=', 20)->update([
                'date_1' => $data->date_1[0],
            ]);

            DB::table('lini_masa')->where('id', '=', 21)->update([
                'date_1' => $data->date_1[1],
            ]);
            
            DB::table('lini_masa')->where('id', '=', 22)->update([
                'date_1' => $data->date_1[2],
            ]);

            DB::table('lini_masa')->where('id', '=', 23)->update([
                'date_1' => $data->date_1[3],
            ]);
            
            DB::table('lini_masa')->where('id', '=', 24)->update([
                'date_1' => $data->date_1[4],
            ]);

            DB::table('lini_masa')->where('id', '=', 25)->update([
                'date_1' => $data->date_1[5],
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return $e;
        }
        
        return 1;
    }
}
