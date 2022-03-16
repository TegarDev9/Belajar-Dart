<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_petugas extends Model
{
    public $timestamps = false;
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    protected $fillable = ['nama_petugas', 'jenis_kelamin', 'alamat', 'no_hp'];
}
