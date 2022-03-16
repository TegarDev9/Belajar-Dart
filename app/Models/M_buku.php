<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_buku extends Model
{
    public $timestamps = false;
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    protected $fillable = ['nama_buku', 'kategori_buku', 'penerbit', 'pengerang', 'jumlah_hal', 'tahun_terbit', 'no_rak', 'stok', 'status'];
}
