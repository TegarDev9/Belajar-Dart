<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    
    protected $table = 'buku';
    protected $primarykey = 'id_buku';
    protected $fillable = ['id_buku', 'judul_buku','Kategori_buku','penerbit','pengarang','jumlah_hal','tahun','stok','Status'];
}
