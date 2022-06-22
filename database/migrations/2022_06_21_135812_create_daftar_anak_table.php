<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_anak', function (Blueprint $table) {
            $table->id('id_anak');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('alamat');
            $table->string('ttl');
            $table->enum('golongan_darah', ['A', 'B', 'AB', 'O']);
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
        Schema::dropIfExists('daftar_anak');
    }
}
