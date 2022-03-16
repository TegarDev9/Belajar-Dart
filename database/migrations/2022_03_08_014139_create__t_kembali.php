<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTKembali extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_kembali', function (Blueprint $table) {
            $table->id('id_kembali');
            $table->bigInteger('id_petugas');
            $table->bigInteger('id_anggota');
            $table->date('tgl_kembali');
            $table->date('denda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_t_kembali');
    }
}
