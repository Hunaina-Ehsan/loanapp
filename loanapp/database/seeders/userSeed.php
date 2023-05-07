<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'username' => 'ali123',
                'password' => 'password123',
                'type' => 'A',
            ],
            [
                'id' => 2,
                'username' => 'ahmad_ali',
                'password' => 'ahmad123',
                'type' => 'I',
            ],
            [
                'id' => 3,
                'username' => 'sara786',
                'password' => 'sara456',
                'type' => 'I',
            ],
            [
                'id' => 4,
                'username' => 'fahan_khan',
                'password' => 'farhan789',
                'type' => 'I',
            ],
        ]);
    }
}
