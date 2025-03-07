<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminMovieController extends Controller
{
    // 映画の一覧を表示する
    public function index()
    {
        // 全ての映画データを取得
        $movies = Movie::all();

        // 管理者用の映画一覧ページを表示
        return view('admin.movies.index', compact('movies'));
    }

    public function show($id)
    {
    // 映画IDで映画を取得
    $movie = Movie::findOrFail($id);
    // 管理者用の映画詳細ページを表示
    return view('admin.movies.show', compact('movie'));
    }

    // 映画新規作成画面の表示
    public function create()
    {
        return view('admin.movies.create');
    }

    // 映画データの保存
    public function store(Request $request)
    {
        // バリデーションルール
        $validated = $request->validate([
            'title' => 'required|unique:movies,title|max:255', // タイトルが重複しないように
            'image_url' => 'required|url', // 画像URLのバリデーション
            'published_year' => 'required|integer', // 公開年
            'description' => 'required', // 概要は必須
            'is_showing' => 'boolean', // 上映中かどうか（チェックボックス）
        ]);

        // データの保存
        $movie = new Movie();
        $movie->title = $validated['title'];
        $movie->image_url = $validated['image_url'];
        $movie->published_year = $validated['published_year'];
        $movie->description = $validated['description'];
        $movie->is_showing = $request->has('is_showing') ? true : false;
        $movie->save();

        // 登録完了
        return redirect()->route('admin.movies.create')->with('success', '映画が登録されました！');
    }



}