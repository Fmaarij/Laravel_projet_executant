<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'categories' )->insert( [ [
            'cat_name' => 'Animal',
            'created_at' =>now(),
            'updated_at' => now()

        ],
        [
            'cat_name' => 'Car',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'cat_name' => 'Plane',
            'created_at' =>now(),
            'updated_at' => now()
        ],
        [
            'cat_name' => 'Food',
            'created_at' =>now(),
            'updated_at' => now()
        ]
       ] );
    }
}
