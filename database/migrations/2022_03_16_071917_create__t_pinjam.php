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
            $table->bigIncrements('id_pinjam');
            $table->bigInteger('id_petugas')->unsigned();
            $table->bigInteger('id_anggota')->unsigned();
            $table->date('tgl_pinjam');
            $table->string('tgl_kembali');
        });

        // Schema::table('t_pinjam', function (Blueprint $table) {
        //     $table->foreign('id_petugas')->references('id_petugas')->on('petugas')
        //         ->onDelete('cascade')->onUpdate('cascade');
        //     $table->foreign('id_anggota')->references('id_anggota')->on('anggota')
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
        Schema::dropIfExists('_t_pinjam');
    }
}
