<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->string('name');
          $table->string('email')->unique();
          $table->string('password');
          $table->enum('role',['rangers','delegates'])->default('delegates');

          // pilihan..
          $table->integer('kelas_id')->unsigned()->nullable();
          $table->integer('komunitas_id')->unsigned()->nullable();
          $table->integer('makan_id')->unsigned()->nullable();

          $table->foreign('kelas_id')
                ->references('id')
                ->on('kelas_workshop')
                ->onDeletes('cascade');
          $table->foreign('komunitas_id')
                ->references('id')
                ->on('komunitas')
                ->onDeletes('cascade');
          $table->foreign('makan_id')
                ->references('id')
                ->on('menu_makan')
                ->onDeletes('cascade');

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
