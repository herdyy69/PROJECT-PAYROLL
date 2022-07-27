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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_karyawan'); 
            $table->foreign('id_karyawan')->references('id')->on('karyawans')
            ->onDelete('CASCADE');

            $table->integer('hari_izin');
            $table->integer('hari_sakit');
            $table->integer('hari_alfa');
            $table->integer('hari_kerja');
            $table->integer('asuransi');
            $table->integer('total_gaji');
            $table->date('tanggal_penggajian');
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
        Schema::dropIfExists('laporans');
    }
};
