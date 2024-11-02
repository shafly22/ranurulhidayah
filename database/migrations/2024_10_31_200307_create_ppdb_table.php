<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePPDBSTable extends Migration
{
    public function up()
    {
        Schema::create('p_p_d_b_s', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kelas');
            $table->date('tanggal_lahir');
            $table->date('tanggal_daftar');
            $table->string('status');
            $table->unsignedBigInteger('id_pendaftar');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('p_p_d_b_s');
    }
}
