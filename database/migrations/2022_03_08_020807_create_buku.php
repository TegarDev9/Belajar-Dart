<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->bigIncrements('id_buku');
            $table->string('nama_buku', 100);
            $table->string('kategori_buku', 100);
            $table->string('penerbit', 100);
            $table->string('pengarang', 100);
            $table->string('jumlah_hal', 100);
            $table->string('tahun_terbit', 100);
            $table->string('no_rak', 50);
            $table->string('stok', 50);
            $table->enum('status', ['Dipinjam', 'Dikembalikan']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
}
