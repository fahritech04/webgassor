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
        Schema::create('sewas', function (Blueprint $table) {
            $table->id();
            $table->string('sewa_uuid')->nullable();

            $table->unsignedBigInteger('penyewa_id');
            $table->foreign('penyewa_id')
                ->references('id')
                ->on('penyewas')
                ->onDelete('cascade');

            $table->unsignedBigInteger('motor_id');
            $table->foreign('motor_id')
                ->references('id')
                ->on('motors')
                ->onDelete('cascade');

            $table->date('tanggal_sewa');
            $table->date('tanggal_kembali');
            $table->integer('total_biaya');
            $table->string('catatan')->nullable();
            $table->boolean('status'); // 0 = masa sewa / belum kembali ,1 = sudah kembali 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
