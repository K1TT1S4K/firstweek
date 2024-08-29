<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB :: table('phones') -> insert( [
            [
                'name' => '',
                'country_id' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'country_id' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '',
                'country_id' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        //
    }
}
