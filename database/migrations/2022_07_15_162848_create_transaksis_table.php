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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('nofak')->unique();
            $table->date('tanggalkeluar');
            // $table->bigInteger('mekaniks_id');
            $table->bigInteger('servis_id');
            $table->integer('qty');
            $table->integer('harga');
            $table->integer('total');
            // $table->bigInteger('layanans_id');
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
        Schema::dropIfExists('transaksis');
    }
};
