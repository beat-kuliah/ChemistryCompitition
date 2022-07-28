<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ChemistrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chemistry')->insert([
            'id' => 1,
            'name' => 'Chemistry Photography',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 2,
            'name' => 'Chemistry Movie Project',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 3,
            'name' => 'Chemistry Poster Design',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 4,
            'name' => 'Daily Vlog',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 5,
            'name' => 'Chemistry Competition',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 6,
            'name' => 'Chemistry Innovation Project',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 7,
            'name' => 'Chemistry Open Debate',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 8,
            'name' => 'Seminar Nasional',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('chemistry')->insert([
            'id' => 9,
            'name' => 'Chempaign',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
