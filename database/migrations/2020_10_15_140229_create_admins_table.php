<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id',)->constrained('kategori_kelas');

            $table->string('email')->unique();
            $table->string('name');
            $table->string('password');

            $table->enum('role', ['admin', 'reviewer']);

            $table->timestamp('last_login')->nullable();

            $table->rememberToken();
            $table->timestamps();
        });

        // Schema::table('admins', function (Blueprint $table) {
        //     $table->
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
