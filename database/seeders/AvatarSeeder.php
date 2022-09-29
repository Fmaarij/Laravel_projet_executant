<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'avatars' )->insert( [
            'avatar_name' => 'anonyme',
            'img' => 'https://images.unsplash.com/photo-1661984271289-62fee1082679?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=200&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2NDQ1MjUyOA&ixlib=rb-1.2.1&q=80&w=300',
            'created_at' =>now(),
            'updated_at' => now()

        ]);
    }
}
