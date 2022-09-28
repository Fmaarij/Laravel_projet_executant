<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder {
    /**
    * Run the database seeds.
    *
    * @return void
    */

    public function run() {
        DB::table( 'users' )->insert( [
            [
                'name' => 'Kevin',
                'lastname' => 'Assiabo',
                'age' => 24,
                'role_id' =>1,
                'avatar_id' =>1,
                'article_id' =>1,
                'email' =>'Kev@gmail.com',
                'password'=>bcrypt( 'Kev@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Cactus',
                'lastname' => 'Mohammed',
                'age' => 24,
                'role_id' =>1,
                'avatar_id' =>2,
                'article_id' =>3,
                'email' =>'cactus@gmail.com',
                'password'=>bcrypt( 'cactus@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'name' => 'Kadri',
                'lastname' => 'Hamza',
                'age' => 29,
                'role_id' =>2,
                'avatar_id' =>4,
                'article_id' =>2,
                'email' =>'kadri@gmail.com',
                'password'=>bcrypt( 'kadri@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'name' => 'Elias',
                'lastname' => 'Daoud',
                'age' => 23,
                'role_id' =>2,
                'avatar_id' =>5,
                'article_id' =>4,
                'email' =>'elias@gmail.com',
                'password'=>bcrypt( 'elias@gmail.com' ),
                'created_at'=>now(),
                'updated_at'=>now(),
            ]

        ] );
    }
}
