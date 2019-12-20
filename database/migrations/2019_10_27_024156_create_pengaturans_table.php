<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slogan')->nullable();
            $table->string('npwp')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('ktp')->nullable();
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('gambar')->default('avatar.jpg')->nullable();
            $table->text('catatan')->nullable();
            $table->string('alamat')->nullable();
            $table->bigInteger('id_kota')->unsigned()->nullable();
            $table->foreign('id_kota')->references('id')->on('kotas')->onDelete('cascade');
            $table->bigInteger('id_kode')->unsigned()->nullable();
            $table->foreign('id_kode')->references('id')->on('poss')->onDelete('cascade');
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
        Schema::dropIfExists('pengaturans');
    }
}
