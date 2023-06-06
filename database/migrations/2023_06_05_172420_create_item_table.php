<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('kodeBarang');
            $table->string('namaBarang');
            $table->decimal('hargaBarang', 8, 2);
            $table->text('deskripsiBarang');
            $table->unsignedBigInteger('satuan_id');
            $table->timestamps();

            $table->foreign('satuan_id')->references('id')->on('satuan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
