<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person')->insert([
            'competition_id' => 1,
            'person_type_id' => 1,
            'mahasiswa' => 1,
            'name' => 'michael',
            'no_identitas' => '12345678',
            'gender' => 0,
            'no_telp' => '12345678',
            'email' => 'michael@gmail.com',
            'id_line' => 'mich12',
            'scan_kartu_pelajar' => 'img',
            'foto' => 'img',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
