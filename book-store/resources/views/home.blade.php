<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .book-list { display: flex; flex-wrap: wrap; gap: 15px; list-style: none; padding: 0; }
        .book-item { border: 1px solid #ccc; padding: 10px; width: 200px; }
        .book-item img { max-width: 100%; height: 250px; object-fit: cover; }
        nav { margin-bottom: 20px; }
    </style>
</head>
<body>
    <h1>Cửa hàng sách</h1>

    <nav>
        <strong>Danh mục:</strong>
        @foreach($categories as $cat)
            <a href="{{ route('category', ['id' => $cat->id]) }}">{{ $cat->name }}</a> |
        @endforeach
    </nav>

    <hr>

    <h2>Top 8 sản phẩm giá cao nhất</h2>
    <div class="book-list">
        @foreach($highestPriceBooks as $book)
            <div class="book-item">
                <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
                <h4><a href="{{ route('book.detail', ['id' => $book->id]) }}">{{ $book->title }}</a></h4>
                <p>Giá: {{ number_format($book->price) }} VNĐ</p>
            </div>
        @endforeach
    </div>

    <hr>

    <h2>Top 8 sản phẩm giá thấp nhất</h2>
    <div class="book-list">
        @foreach($lowestPriceBooks as $book)
            <div class="book-item">
                <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
                <h4><a href="{{ route('book.detail', ['id' => $book->id]) }}">{{ $book->title }}</a></h4>
                <p>Giá: {{ number_format($book->price) }} VNĐ</p>
            </div>
        @endforeach
    </div>

</body>
</html>