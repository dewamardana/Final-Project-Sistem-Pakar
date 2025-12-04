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
        Schema::create('aturans', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->foreignId('user_id')->constrained()->restrictOnDelete();
            $table->foreignId('penyakit_id')->constrained()->restrictOnDelete();
            $table->integer('min_gejala_utama');
            $table->integer('min_gejala_lain');
            $table->boolean('wajib_g011')->default(false);
            $table->boolean('wajib_g012')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aturans');
    }
};
