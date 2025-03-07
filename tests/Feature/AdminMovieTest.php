<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminMovieTest extends TestCase
{
    /**
     * 管理者映画作成画面が表示されるかをテストする
     *
     * @return void
     */
    public function test管理者映画作成画面が表示されているか()
    {
        // GETリクエストで、admin.movies.createのルートにアクセス
        $response = $this->get(route('admin.movies.create'));

        // レスポンスのステータスコードが200であることを確認
        $response->assertStatus(200);  // 200は正常にページが表示されていることを示します
    }
}
