<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画新規作成</title>
</head>
<body>

<h1>映画新規作成</h1>

<!-- フラッシュメッセージ（登録成功時） -->
@if (session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<!-- バリデーションエラーメッセージ -->
@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li style="color: red;">{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('admin.movies.store') }}" method="POST">
    @csrf

    <!-- 映画タイトル -->
    <label for="title">映画タイトル:</label>
    <input type="text" name="title" value="{{ old('title') }}" required>
    <br>

    <!-- 画像URL -->
    <label for="image_url">画像URL:</label>
    <input type="url" name="image_url" value="{{ old('image_url') }}" required>
    <br>

    <!-- 公開年 -->
    <label for="published_year">公開年:</label>
    <input type="number" name="published_year" value="{{ old('published_year') }}" required>
    <br>

    <!-- 概要 -->
    <label for="description">概要:</label>
    <textarea name="description" required>{{ old('description') }}</textarea>
    <br>

    <!-- 上映中チェックボックス -->
    <label for="is_showing">上映中:</label>
    <input type="checkbox" name="is_showing" {{ old('is_showing') ? 'checked' : '' }}>
    <br>

    <button type="submit">映画を登録</button>
</form>

</body>
</html>
