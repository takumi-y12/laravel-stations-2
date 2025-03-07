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
        Schema::table('movies', function (Blueprint $table) {
            $table->year('published_year')->nullable(); // 'published_year'カラムを追加
        });
    }
    
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('published_year'); // ロールバック時に'published_year'カラムを削除
        });
    }
};