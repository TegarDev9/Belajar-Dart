<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_pengembalian extends Model
{
    public $timestamps = false;
    protected $table = 't_kembali';
    protected $primaryKey = 'id_kembali';
    protected $fillable = ['id_petugas', 'id_anggota', 'tgl_kembali', 'denda'];
}
