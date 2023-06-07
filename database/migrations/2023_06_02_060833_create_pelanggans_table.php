<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id('pelangganID');
            $table->unsignedBigInteger('akunID');
            $table->foreign('akunID')->references('akunID')->on('akuns')->onDelete('cascade');
            $table->string('nama_pelanggan');
            $table->string('lokasi_pelanggan');
            $table->integer('nomorHP_pelanggan');
            $table->string('ppPelanggan');
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
        Schema::dropIfExists('pelanggans');
    }
};
