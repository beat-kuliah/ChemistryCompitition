<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PersonSeeder::class,
            ChemistrySeeder::class,
            CompetitionSeeder::class,
            RegionalSeeder::class,
            PersonTypeSeeder::class,
            UserSeeder::class,
            LiniMasaSeeder::class,
            NewsSeeder::class,
            PartnerSeeder::class,
            SponsorSeeder::class,
        ]);
    }
}
