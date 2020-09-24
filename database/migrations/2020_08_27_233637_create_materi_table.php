<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('kelas_id');

            $table->string('judul', 64);
            $table->string('slug_materi');
            $table->text('deskripsi');
            $table->string('foto')->nullable();
            $table->string('video')->nullable();
            $table->string('pdf')->nullable();
            $table->integer('urutan')->nullable();
            $table->enum('status', ['waiting', 'success', 'failed'])->nullable();

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
        Schema::dropIfExists('materis');
    }
}
