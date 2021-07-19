<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alamat');
            $table->string('telephon');
            $table->string('jenis_maggot');
            $table->string('berat');
            $table->text('bukti_tf');
            $table->string('jasa_pengiriman');
            $table->string('status_pengiriman');
            $table->string('status_transaksi');
            $table->enum('status',['Y','N']);
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
        Schema::dropIfExists('transaksis_tables');
    }
}
