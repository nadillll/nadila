<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;
use Illuminate\support\facades\Hash;



class userseeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => "Nama Anda Sendiri",
            'email' => 'namaanda@namaanda.com',
            'password' => Hash::make('12345678'),
            // 'level' => 'admin',
			]);

    }
}
   

