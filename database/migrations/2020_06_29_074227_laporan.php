<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laporan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('laporan');
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('jenis_barang', 50);
            $table->string('deskripsi', 225);
            $table->string('no_hp', 13);
            $table->char('gambar',225);
            $table->string('status', 2);
            $table->enum('kategori', array('LKB', 'LPB', 'LFK'));
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
        Schema::dropIfExists('laporan');
    }
}
