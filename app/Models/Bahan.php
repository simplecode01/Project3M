<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_bahan',
        'kode_bahan',
        'dekripsi_bahan',
        'foto',

    ];
}
