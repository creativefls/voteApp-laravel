<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasWorkshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_workshop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kelas', 50);
            $table->text('deskripsi');
            $table->string('gambar_logo', 255);
            $table->string('ruang_kelas', 20);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas_workshop');
    }
}
