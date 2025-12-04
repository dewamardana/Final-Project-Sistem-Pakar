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
        Schema::create('konsultasi_gejalas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('konsultasi_id')->constrained()->restrictOnDelete();
            $table->string('jawaban');
            $table->float('cf_user');
            $table->float('cf_evidence');
            $table->foreignId('gejala_id')->constrained()->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsultasi_gejalas');
    }
};
