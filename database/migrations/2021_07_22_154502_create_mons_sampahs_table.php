<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonsSampahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mons_sampahs', function (Blueprint $table) {
            $table->id();
            $table->string('hari');
            $table->date('tanggal');
            $table->text('total_sampah');
            $table->text('note');
            $table->enum('status_monitoring',['Y','N']);
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
        Schema::dropIfExists('mons_sampahs');
    }
}
