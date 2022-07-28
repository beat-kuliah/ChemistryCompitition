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
            'id' => 1,
            'chemistry_id' => 5,
            'date_1' => "2022-7-25",
            'date_2' => "2022-8-28",
            'date_3' => "2022-8-29",
            'date_4' => "2022-10-14",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 2,
            'chemistry_id' => 5,
            'date_1' => "2022-10-22",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 3,
            'chemistry_id' => 5,
            'date_1' => "2022-10-29",
            'date_2' => "2022-10-31",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 4,
            'chemistry_id' => 5,
            'date_1' => "2022-11-9",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 5,
            'chemistry_id' => 5,
            'date_1' => "2022-11-12",
            'date_2' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 6,
            'chemistry_id' => 5,
            'date_1' => "2022-11-13",
            'date_2' => "2022-11-20",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 7,
            'chemistry_id' => 7,
            'date_1' => "2022-7-25",
            'date_2' => "2022-8-28",
            'date_3' => "2022-8-29",
            'date_4' => "2022-10-14",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 8,
            'chemistry_id' => 7,
            'date_1' => "2022-10-29",
            'date_2' => "2022-10-31",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 9,
            'chemistry_id' => 7,
            'date_1' => "2022-11-9",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 10,
            'chemistry_id' => 7,
            'date_1' => "2022-11-12",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 11,
            'chemistry_id' => 7,
            'date_1' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 12,
            'chemistry_id' => 6,
            'date_1' => "2022-7-25",
            'date_2' => "2022-8-28",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 13,
            'chemistry_id' => 6,
            'date_1' => "2022-10-22",
            'date_2' => "2022-10-22",
            'date_3' => "2022-10-22",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 14,
            'chemistry_id' => 6,
            'date_1' => "2022-10-29",
            'date_2' => "2022-10-31",
            'date_3' => "2022-10-22",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 15,
            'chemistry_id' => 6,
            'date_1' => "2022-11-9",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 16,
            'chemistry_id' => 6,
            'date_1' => "2022-11-12",
            'date_2' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 17,
            'chemistry_id' => 6,
            'date_1' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 18,
            'chemistry_id' => 8,
            'date_1' => "2022-11-12",
            'date_2' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 19,
            'chemistry_id' => 8,
            'date_1' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 20,
            'chemistry_id' => 9,
            'date_1' => "2022-7-25",
            'date_2' => "2022-8-28",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 21,
            'chemistry_id' => 9,
            'date_1' => "2022-10-22",
            'date_2' => "2022-10-22",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 22,
            'chemistry_id' => 9,
            'date_1' => "2022-10-29",
            'date_2' => "2022-10-31",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 23,
            'chemistry_id' => 9,
            'date_1' => "2022-11-9",
            'date_2' => "2022-11-9",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 24,
            'chemistry_id' => 9,
            'date_1' => "2022-11-12",
            'date_2' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('lini_masa')->insert([
            'id' => 25,
            'chemistry_id' => 9,
            'date_1' => "2022-11-13",
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
