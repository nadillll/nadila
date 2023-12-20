<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relation extends Model
{
    protected $table = 'relations';
    protected $fillable = [
        'mahasiswa_npm',
        'dosen_nidn',
        'matakuliah_kode',
        'status',
	];

    use HasFactory;
}
