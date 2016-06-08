<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->increments('id_reservasi');
            $table->string('judul_kegiatan',50);
            $table->text('deskripsi_kegiatan');
            $table->time('waktu_mulai');
            $table->time('waktu_akhir');
            $table->string('info_kontak',50);
            $table->boolean('kegiatan_berulang');
            $table->date('tanggal_kegiatan');
            $table->boolean('setuju');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservasi');
    }
}
