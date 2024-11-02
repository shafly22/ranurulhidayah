<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('ppdb', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pendaftar')->after('id'); // Menambahkan kolom id_pendaftar
            // Jika ada relasi ke tabel pendaftar, Anda bisa tambahkan foreign key
            // $table->foreign('id_pendaftar')->references('id')->on('pendaftars')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('ppdb', function (Blueprint $table) {
            $table->dropColumn('id_pendaftar'); // Menghapus kolom saat rollback
        });
    }
};
