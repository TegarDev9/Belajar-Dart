<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id_d_peminjaman');
            $table->bigInteger('id_buku')->unsigned();
            $table->bigInteger('id_pinjam')->unsigned();
        });

        // Schema::table('detail_peminjaman', function (Blueprint $table) {
        //     $table->foreign('id_buku')->references('id_buku')->on('buku')
        //         ->onDelete('cascade')->onUpdate('cascade');
        //     $table->foreign('id_pinjam')->references('id_pinjam')->on('t_pinjam')
        //         ->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_peminjaman');
    }
}
