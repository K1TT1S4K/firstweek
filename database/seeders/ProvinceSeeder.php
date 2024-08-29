<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB :: table('provinces')->insert( [
            [
                'name' => 'สุรินทร์',
                'region_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'kanto',
                'region_id' => '2',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
            [
                'name' => 'hong kong',
                'region_id' => '3',
                'created_at' => now(),
                'updayed_at' => now(),
            ],
        ]);
        //
    }
}
