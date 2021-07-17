<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosSampahsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos_sampahs_tables', function (Blueprint $table) {
            $table->id('id_info_sampah');
            $table->text('judul');
            $table->text('konten');
            $table->text('image');
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
        Schema::dropIfExists('infos_sampahs_tables');
    }
}
