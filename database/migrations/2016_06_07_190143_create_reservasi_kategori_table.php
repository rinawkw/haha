<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasiKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi_kategori', function (Blueprint $table) {
            $table->integer('id_reservasi')->foreign()->references('id_reservasi')->on('reservasi');
            $table->integer('id_kategori')->foreign()->references('id_kategori')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservasi_kategori');
    }
}
