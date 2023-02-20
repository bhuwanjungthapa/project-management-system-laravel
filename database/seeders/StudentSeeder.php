<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id'=>1,
            'name' => 'Bhuwan',
            'email' => 'b@gmail.com',
            'semester' => 7,
            'program_id' => 1,
            'user_id' => 2,
            'batch_id' => 2,
        ]);
        DB::table('students')->insert([
            'id'=>2,
            'name' => 'Nishant',
            'email' => 'n@gmail.com',
            'semester' => 7,
            'program_id' => 2,
            'user_id' => 2,
            'batch_id' => 1,
        ]);

        DB::table('students')->insert([
            'id'=>3,
            'name' => 'Oshan',
            'email' => 'o@gmail.com',
            'semester' => 7,
            'program_id' => 1,
            'user_id' => 2,
            'batch_id' => 2,
        ]);
    }
}
