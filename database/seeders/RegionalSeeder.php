<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regional')->insert([
            'name' => 'Sumatera dan sekitarnya',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('regional')->insert([
            'name' => 'Banten, DKI Jakarta, Jawa Barat',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('regional')->insert([
            'name' => 'Jawa Tengah, DIY, dan Jawa Timur',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('regional')->insert([
            'name' => 'Kalimantan, Bali, dan Sulawesi',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('regional')->insert([
            'name' => 'Nusa Tenggara Barat, Nusa Tenggara Timur, Maluku, dan Papua',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
