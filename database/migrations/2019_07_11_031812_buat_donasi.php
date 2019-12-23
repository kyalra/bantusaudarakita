<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatDonasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buat_donasi', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id');
            $table->string('judul');
            $table->string('keterangan');
            $table->string('gambar');
            $table->string('jumlah');
            $table->string('norek');
            $table->string('jumlah_terkumpul')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
