<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <a href="{{ route("home") }}">trang chủ</a>
            @foreach ( $categories as $cate )
            <a href="{{ route('posts.list', ['id' => $cate->id]) }}">{{ $cate->name }}</a>
                   
            @endforeach
        </nav>
        <div class="container">
            <h2>danh sách bài viết mới nhất</h2>
            @foreach ($posts as $post)
            <div class="col-3 mp-3 border-amber-200">
                <a href="{{ route('posts.detail', ['id' => $post->id]) }}">
                    <h3>{{ $post->title }}</h3>
                </a>
                <div>Danh mục {{ $post->name }}</div>
                <div>
                    {{ $post->description }}
                </div>
            </div>
                <hr>
            @endforeach
        </div>
    </div>
</body>
</html>