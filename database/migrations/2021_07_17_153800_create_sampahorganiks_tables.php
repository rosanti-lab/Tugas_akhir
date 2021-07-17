<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSampahorganiksTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sampahorganiks_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('alamat');
            $table->string('telephon');
            $table->date('tanggal');
            $table->text('image');
            $table->text('berat');
            $table->enum('status_penjemputan',['Y','N']);
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
        Schema::dropIfExists('sampahorganiks_tables');
    }
}
