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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('id_admin'); 
            $table->foreign('id_admin')->references('id')->on('users')
            ->onDelete('CASCADE');

            $table->integer('nik');
            $table->string('nama_karyawan');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->enum('agama', ['Islam', 'Kristen', 'Hindu', 'Buddha', 'Konghucu']);
            $table->string('alamat');
            $table->string('no_telepon');
            $table->date('tanggal_masuk');

            $table->unsignedBigInteger('id_jabatan'); 
            $table->foreign('id_jabatan')->references('id')->on('jabatans')
            ->onDelete('CASCADE');

            $table->unsignedBigInteger('id_status'); 
            $table->foreign('id_status')->references('id')->on('statuses')
            ->onDelete('CASCADE');

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
        Schema::dropIfExists('karyawans');
    }
};
