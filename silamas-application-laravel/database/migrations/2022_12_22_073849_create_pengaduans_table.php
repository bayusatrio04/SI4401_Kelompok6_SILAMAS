<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();

            $table->string('user_nik');
            $table->string('name');
            $table->integer('user_id');
            $table->string('type');
            $table->text('description');
            $table->text('lokasi');
            $table->date('tanggal_kejadian');
            $table->string('image');
            $table->string('status')->default('Belum di Proses');

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
        Schema::dropIfExists('pengaduans');
    }
};
