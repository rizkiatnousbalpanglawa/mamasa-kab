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
        Schema::table('portals', function (Blueprint $table) {
            $table->dropColumn('logo');
            $table->dropColumn('judul');
            $table->dropColumn('subjudul');
            $table->dropColumn('background');
            $table->string('logo')->nullable();
            $table->string('judul')->nullable();
            $table->string('subjudul')->nullable();
            $table->string('background')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portals', function (Blueprint $table) {
            $table->dropColumn('background');
            $table->dropColumn('logo');
            $table->dropColumn('judul');
            $table->dropColumn('subjudul');
        });
    }
};
