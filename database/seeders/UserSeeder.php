<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Support\Hash;
use Illuminate\Support\Str;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for ($i=0; $i<10; $i++)
        {
            DB::table('users')->insert([
                'username'=>Str::random(6),
                'fullname'=>Str::random(6),
                'phone'=>Str::random(6),
                'email'=>Str::random(8).'@gmail.com',
                'gender'=>Str::random(6),
            ]);
        }
       
    }
}
