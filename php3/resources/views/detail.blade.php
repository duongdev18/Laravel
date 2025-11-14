<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav>menu</nav>
        <div class="container">
            <h2>{{ $post->title }}</h2>
            <p>
                {{ $post->content }}
            </p>
        </div>
    </div>
</body>
</html>