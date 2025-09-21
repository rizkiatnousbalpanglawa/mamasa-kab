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
        Schema::table('visi_misis', function (Blueprint $table) {
            $table->dropColumn('image');
            $table->string('judul');
            $table->string('subjudul');
            $table->text('konten');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visi_misis', function (Blueprint $table) {
            $table->string('image');
            $table->dropColumn('judul');
            $table->dropColumn('subjudul');
            $table->dropColumn('konten');
        });
    }
};
