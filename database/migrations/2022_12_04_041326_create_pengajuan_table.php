<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('lokasi_tujuan');
            $table->date('tanggal_keberangkatan');
            $table->date('tanggal_kembali');
            $table->string('tujuan');
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
        Schema::dropIfExists('pengajuan');
    }
}
