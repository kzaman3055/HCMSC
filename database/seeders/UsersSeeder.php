<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        













        DB::table('users')->insert([
            'name' => 'Super Admin',
            'role'=>'super_admin',
            'email' =>'super@mail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Admin',
            'role'=>'admin',
            'email' =>'admin@mail.com',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Teacher',
            'role'=>'teacher',
            'email' =>'teacher@mail.com',
            'password' => Hash::make('123456789'),
        ]);





        DB::table('sessions')->insert([
            'year' => '2020',
        
        ]);

        DB::table('sessions')->insert([
            'year' => '2021',
        
        ]);
        DB::table('sessions')->insert([
            'year' => '2022',
        
        ]);




    }
}
