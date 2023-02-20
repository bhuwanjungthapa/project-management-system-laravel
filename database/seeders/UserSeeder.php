<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'name' => 'Dhiraj Kumar Jha',
            'email' => 'callmedhiraj@gmail.com',
            'role_id' => 01,
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'id'=>2,
            'name' => 'Basanta Chapagain',
            'email' => 'callmebasanta@gmail.com',
            'role_id' => 2,
            'password' => Hash::make('12345678'),
        ]);
        DB::table('users')->insert([
            'id'=>3,
            'name' => 'Bhuwan',
            'email' => 'b@gmail.com',
            'role_id' => 3,
            'password' => Hash::make('12345678'),
        ]);
    }
}
