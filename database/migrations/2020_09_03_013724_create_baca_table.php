<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baca', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreignId('materi_id');
            $table->timestamp('waktu');
            $table->boolean('mengerti');

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
        Schema::dropIfExists('baca');
    }
}
