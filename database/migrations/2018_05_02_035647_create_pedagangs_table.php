<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedagangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedagangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slogan')->nullable();
            $table->string('npwp')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('gambar_ktp')->nullable();
            $table->string('file_siup')->nullable();
            $table->string('gambar_toko')->nullable();
            $table->string('sampul_toko')->nullable();
            $table->string('catatan_toko')->nullable();
            $table->string('alamat_toko')->nullable();
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('kabupaten')->unsigned()->nullable();
            $table->foreign('kabupaten')->references('id')->on('kotas')->onDelete('cascade');
            $table->bigInteger('kode_pos')->unsigned()->nullable();
            $table->foreign('kode_pos')->references('id')->on('kodes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedagangs');
    }
}
