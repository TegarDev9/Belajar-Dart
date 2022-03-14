<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $fillable = ['id_anggota','nama', 'alamat', 'jenis_kelamin','no_hp','umur'];
}
