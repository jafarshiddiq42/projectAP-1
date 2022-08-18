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
        Schema::create('servis', function (Blueprint $table) {
            $table->id();
            $table->string('namapelanggan');
            $table->bigInteger('mekanik_id');
            $table->string('alamat');
            // $table->string('kdbarang');
            // $table->string('nmbarang');
            // $table->string('alamat');
            $table->date('tanggalmasuk');
            $table->string('telp');
            // $table->string('kerusakan');
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
        Schema::dropIfExists('servis');
    }
};
