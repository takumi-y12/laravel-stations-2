<!-- resources/views/admin/movies/index.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画一覧</title>
</head>
<body>

<h1>映画一覧</h1>

<table border="1">
    <thead>
        <tr>
            <th>映画タイトル</th>
            <th>画像URL</th>
            <th>公開年</th>
            <th>上映中かどうか</th>
            <th>概要</th>
            <th>登録日時</th>
            <th>更新日時</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
            <tr>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->image_url }}</td>
                <td>{{ $movie->published_year }}</td>
                <td>{{ $movie->is_showing ? '上映中' : '上映予定' }}</td>
                <td>{{ $movie->description }}</td>
                <td>{{ $movie->created_at ? $movie->created_at->format('Y-m-d H:i') : '未設定' }}</td>
                <td>{{ $movie->updated_at ? $movie->updated_at->format('Y-m-d H:i') : '未設定' }}</td>
                <td><a href="{{ route('admin.movies.show', $movie->id) }}">詳細</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
