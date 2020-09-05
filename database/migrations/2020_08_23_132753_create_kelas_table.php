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

            // $table->foreignId('tingkatan_kelas_id');
            // $table->foreignId('mapel_id');
            // $table->foreignId('level_kelas_id');
            $table->foreignId('user_id');
            $table->foreignId('kategori_id');

            $table->enum('jenjang', ['SD', 'SMP', 'SMA', 'Kuliah', 'Umum']);
            $table->enum('level', [
                'Kelas 1', 'Kelas 2', 'Kelas 3', 'Kelas 4', 'Kelas 5', 'Kelas 6',
                'Kelas 7', 'Kelas 8', 'Kelas 9', 'Kelas 10', 'Kelas 11', 'Kelas 12', 'Diploma',
                'S1', 'S2', 'S3', 'Beginner', 'Intermediate', 'Advanced',
            ]);

            $table->string('nama_kelas', 35);
            $table->string('slug_kelas', 100);
            $table->string('thumbnail');
            $table->longText('deskripsi');
            $table->integer('harga');
            $table->integer('diskon')->nullable();
            $table->date('durasi_kelas');
            $table->integer('kapasitas_kelas');
            $table->string('video_preview');
            $table->enum('status', ['draf', 'review', 'reject', 'publish', 'private', 'nonaktif'])->nullable();

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
