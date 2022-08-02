<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'image' => "https://akcdn.detik.net.id/community/media/visual/2022/08/01/pengacara-bharada-e-andreas-nahot-silitonga_169.jpeg?w=700&q=90",
            'title' => "Berita",
            'description' => "Berita 1",
            'link' => 'www.detik.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
