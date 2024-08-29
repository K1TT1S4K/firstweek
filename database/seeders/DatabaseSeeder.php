<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
         
    \App\Models\User::factory(10)->create();
    \App\Models\Phone::factory(10)->create();
         $this->call(CountrySeeder::class);
         $this->call(RegionSeeder::class);
         $this->call(ProvinceSeeder::class);
        //  $this->call(PhoneSeeder::class);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
