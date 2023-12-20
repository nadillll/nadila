<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class matakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matakuliahs')->insert([
            'kode_mk' => "232323",
            'nama_mk' => 'Mobile Computing',
            'sks' => '3',
            'semester' => 'ganjil',
        ]);
    }
}
