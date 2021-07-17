<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuans_tables', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->text('konten');
            $table->string('name');
            $table->text('alamat');
            $table->string('phone');
            $table->date('tanggal');
            $table->text('image');
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
        Schema::dropIfExists('pengajuans_tables');
    }
}
