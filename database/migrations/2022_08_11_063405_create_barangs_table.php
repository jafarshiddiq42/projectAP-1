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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nm_barang');
            $table->string('kerusakan');
            $table->bigInteger('servis_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *sda
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barangs');
    }
};
