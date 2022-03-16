<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_petugas extends Model
{
    public $timestamps = false;
    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    protected $fillable = ['nama_anggota', 'alamat', 'jenis_kelamin', 'no_hp'];
}
