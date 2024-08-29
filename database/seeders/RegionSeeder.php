<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB :: table('regions') -> insert([
            [
                'name' => '3',
                'country_id' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '1',
                'country_id' => '2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '2',
                'country_id' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //
    }
}
