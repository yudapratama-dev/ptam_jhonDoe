<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable  = [
        'id',
        'Nama',
        'Alamat',
        'Tgl_lahir',
        'Is_active',
        'Pajak'
    ];
}
