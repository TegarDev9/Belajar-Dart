<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_dpeminjaman extends Model
{
    public $timestamps = false;
    protected $table = 'detail_peminjaman';
    protected $primaryKey = 'id_d_pinjam';
    protected $fillable = ['id_buku', 'id_pinjam'];
}
