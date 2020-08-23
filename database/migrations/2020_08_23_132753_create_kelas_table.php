<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('tingkatan_kelas_id');
            $table->foreignId('mapel_id');
            $table->foreignId('level_kelas_id');
            $table->foreignId('user_id');

            $table->string('nama_kelas', 35);
            $table->longText('deskripsi');
            $table->enum('is_verified', ['waiting', 'success', 'failed']);
            $table->integer('harga');

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
        Schema::dropIfExists('kelas');
    }
}
