<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPinjam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pinjam', function (Blueprint $table) {
            $table->id('id_peminjaman');
            $table->bigInteger('id_petugas');
            $table->bigInteger('id_anggota');
            $table->date('tgl_kembali');
            $table->string('denda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_t_pinjam');
    }
}
