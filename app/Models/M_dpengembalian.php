<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_dpengembalian extends Model
{
    public $timestamps = false;
    protected $table = 'detail_kembalian';
    protected $primaryKey = 'id_d_kembalian';
    protected $fillable = ['id_buku', 'id_kembali'];
}
