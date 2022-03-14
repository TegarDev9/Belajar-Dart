<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class peminjaman extends Model
{
      protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    protected $fillable = ['id_peminjaman','nama', 'judul_buku', 'kategori_buku','tanggal_pinjam','tanggal_harus_kembali'];
}
