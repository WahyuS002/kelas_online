<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_peserta_kelas', $autoIncrement = false, $unsigned = true);
            $table->bigInteger('id_kelas', $autoIncrement = false, $unsigned = true);
            $table->bigInteger('id_materi', $autoIncrement = false, $unsigned = true);
            $table->time('waktu_baca')->nullable();
            $table->time('waktu_mengerti')->nullable();
            $table->timestamps();
        });

        Schema::table('progress', function (Blueprint $table) {
            $table->foreign('id_peserta_kelas')->references('id')->on('peserta_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas');
            $table->foreign('id_materi')->references('id')->on('materi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
}
