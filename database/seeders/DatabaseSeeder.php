<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 作成した MovieSeeder を呼び出す
        $this->call([
            MovieSeeder::class,  // MovieSeeder を実行
        ]);
    }
}
