<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliahs';
    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester',
		];
    use HasFactory;
}
