<!-- resources/views/admin/movies/show.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画詳細</title>
</head>
<body>

<h1>{{ $movie->title }} の詳細</h1>

<ul>
    <li>{{ $movie->title }}</li>
    <li>{{ $movie->image_url }}</li>
    <li>{{ $movie->published_year }}</li>
    <li>{{ $movie->is_showing ? '上映中' : '上映予定' }}</li>
    <li>{{ $movie->description }}</li>
    <td>{{ $movie->created_at ? $movie->created_at->format('Y-m-d H:i') : '未設定' }}</td>
    <td>{{ $movie->updated_at ? $movie->updated_at->format('Y-m-d H:i') : '未設定' }}</td>
</ul>

<a href="{{ route('admin.movies.index') }}">戻る</a>

</body>
</html>
