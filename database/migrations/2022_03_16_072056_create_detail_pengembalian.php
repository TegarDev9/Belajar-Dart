<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPengembalian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_kembalian', function (Blueprint $table) {
            $table->bigIncrements('id_d_kembalian');
            $table->bigInteger('id_buku')->unsigned();
            $table->bigInteger('id_kembali')->unsigned();
        });

        // Schema::table('detail_kembalian', function (Blueprint $table) {
        //     $table->foreign('id_buku')->references('id_buku')->on('buku')
        //         ->onDelete('cascade')->onUpdate('cascade');
        //     $table->foreign('id_kembali')->references('id_kembali')->on('t_kembali')
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
        Schema::dropIfExists('detail_pengembalian');
    }
}
