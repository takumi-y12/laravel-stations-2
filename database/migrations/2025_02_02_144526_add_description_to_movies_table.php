<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_add_description_to_movies_table.php
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->text('description')->nullable(); // 'description'カラムを追加
        });
    }

    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn('description'); // ロールバック時に'published_year'カラムを削除
        });
    }

};
