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
        Schema::create('potensis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug');
            $table->foreignId('kategori_id')->constrained('potensi_kategoris')->cascadeOnDelete();
            $table->text('deskripsi');
            $table->string('image');
            $table->unsignedInteger('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potensis');
    }
};
