<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_add_is_showing_to_movies_table.php
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->boolean('is_showing')->default(0); // 'is_showing'カラムを追加、デフォルトは0
        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('is_showing'); // ロールバック時に'is_showing'カラムを削除
        });
    }
};
