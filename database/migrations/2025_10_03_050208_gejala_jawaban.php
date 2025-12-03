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
        Schema::create('gejala_jawaban', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gejala_id')->constrained()->onDelete('cascade');
            $table->foreignId('jawaban_master_id')->constrained('jawaban_masters')->onDelete('cascade');
            $table->float('nilai')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gejala_jawaban');
    }
};
