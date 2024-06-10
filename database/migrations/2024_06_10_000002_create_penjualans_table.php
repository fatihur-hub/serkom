<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tgl_faktur');
            $table->bigInteger('no_faktur');
            $table->string('nama_konsumen');
            $table->foreignId('barang_id');
            $table->integer('jumlah');
            $table->integer('harga_satuan');
            $table->integer('harga_total');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
