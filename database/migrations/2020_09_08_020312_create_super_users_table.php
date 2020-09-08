<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('super_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id');

            $table->string('email')->unique();
            $table->string('password');
            $table->string('name', 50);
            $table->enum('role', ['admin', 'reviewer']);

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
        Schema::dropIfExists('super_users');
    }
}
