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
        Schema::create('mitras', function (Blueprint $table) {
            $table->id('mitraID');
            $table->unsignedBigInteger('akunID');
            $table->foreign('akunID')->references('akunID')->on('akuns')->onDelete('cascade');
            $table->string('nama_mitra');
            $table->string('lokasi_mitra');
            $table->string('nomorHP_mitra');
            $table->integer('gaji');
            $table->string('ppMitra');
            $table->string('fotoktp');
            $table->string('fotoskck');
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
        Schema::dropIfExists('mitras');
    }
};
