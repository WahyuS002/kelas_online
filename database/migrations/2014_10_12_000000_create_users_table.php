<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prov_id')->nullable();
            $table->foreignId('kota_id')->nullable();
            $table->foreignId('kec_id')->nullable();
            $table->foreignId('kel_id')->nullable();

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('name');
            $table->string('password');

            $table->string('no_induk', 50)->nullable();
            $table->string('ktp-npwp')->nullable();

            $table->enum('pendidikan_terakhir', ['SD', 'SMP', 'SMA', 'Kuliah'])->nullable();
            $table->enum('jk', ['L', 'P'])->nullable();
            // $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->longText('bio')->nullable();
            $table->boolean('guru')->nullable();
            $table->boolean('siswa')->nullable();
            $table->string('no_hp', 25)->nullable();
            $table->string('foto')->nullable();
            $table->string('fb')->nullable();
            $table->string('twitter')->nullable();
            $table->string('ig')->nullable();
            $table->string('yt')->nullable();
            // $table->string('linkedin')->nullable();

            $table->char('nik', 16)->nullable();
            $table->char('npwp', 15)->nullable();
            $table->boolean('status')->nullable();

            $table->string('kode_promosi', 35)->nullable();
            $table->string('kode_affiliasi', 35)->nullable();

            $table->timestamp('last_login')->nullable();

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
