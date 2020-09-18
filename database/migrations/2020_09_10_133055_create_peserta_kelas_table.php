<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_kelas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('kelas_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->dateTime('waktu_mulai')->nullable();
            $table->dateTime('waktu_selesai')->nullable();
            $table->integer('harga_bayar')->nullable();
            $table->string('kode_voc')->nullable();
            $table->enum('status', ['ya', 'tidak', 'waiting'])->nullable();
            $table->string('bukti_pembayaran');
            $table->text('testimoni')->nullable();
            $table->tinyInteger('rating')->nullable();

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
        Schema::dropIfExists('peserta_kelas');
    }
}
