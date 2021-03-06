<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $data = [
            [
                'name' => 'Minda sahlaehrad',
                'email' => '622021098@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Nusreen mannuy',
                'email' => '622021097@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'kanokporn nakpin',
                'email' => '622021094@tsu.ac.th',
                'password' => Hash::make('123456'),
                'role' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($data);
    }
}
