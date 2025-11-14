<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Loại sách: {{ $category->name }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .book-list { display: flex; flex-wrap: wrap; gap: 15px; list-style: none; padding: 0; }
        .book-item { border: 1px solid #ccc; padding: 10px; width: 200px; }
        .book-item img { max-width: 100%; height: 250px; object-fit: cover; }
    </style>
</head>
<body>
    <a href="{{ route('home') }}">Quay lại Trang chủ</a>
    <h1>Danh mục: {{ $category->name }}</h1>

    <div class="book-list">
        @forelse($books as $book)
            <div class="book-item">
                <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
                <h4><a href="{{ route('book.detail', ['id' => $book->id]) }}">{{ $book->title }}</a></h4>
                <p>Giá: {{ number_format($book->price) }} VNĐ</p>
            </div>
        @empty
            <p>Chưa có sách trong danh mục này.</p>
        @endforelse
    </div>

    <div style="margin-top: 20px;">
        {{ $books->links() }} 
    </div>
</body>
</html>