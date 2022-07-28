<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class LiniMasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lini_masa')->insert([
            'name' => 'Pendaftaran',
            'gel_1_1' => "2022-7-25",
            'gel_1_2' => "2022-8-28",
            'gel_2_1' => "2022-8-29",
            'gel_2_2' => "2022-10-14",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'name' => 'Technical Meeting 1',
            'tm_1' => "2022-10-22",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'name' => 'Preliminary',
            'pre' => "2022-10-29",
            'p_1' => "2022-10-31",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'name' => 'Technical Meeting 2',
            'tm_2' => "2022-11-9",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'name' => 'Quarter Final',
            'qf' => "2022-11-12",
            'p_2' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'name' => 'Semifinal & Grand Final',
            'sgf' => "2022-11-13",
            'p_3' => "2022-11-20",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
