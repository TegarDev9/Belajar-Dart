<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_peminjaman extends Model
{
    public $timestamps = false;
    protected $table = 't_pinjam';
    protected $primaryKey = 'id_pinjam';
    protected $fillable = ['id_petugas', 'id_anggota', 'tgl_pinjam', 'tgl_kembali'];
}
