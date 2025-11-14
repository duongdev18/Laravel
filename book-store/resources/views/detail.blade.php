<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>{{ $book->title }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { display: flex; gap: 20px; }
        .thumbnail img { max-width: 300px; }
    </style>
</head>
<body>
    <a href="{{ route('home') }}">Quay lại Trang chủ</a> | 
    <a href="{{ route('category', ['id' => $book->category_id]) }}">Xem loại: {{ $book->category_name }}</a>
    
    <hr>

    <h1>{{ $book->title }}</h1>
    
    <div class="container">
        <div class="thumbnail">
            <img src="{{ $book->thumbnail }}" alt="{{ $book->title }}">
        </div>
        <div class="info">
            <p><strong>Tác giả:</strong> {{ $book->author }}</p>
            <p><strong>Nhà xuất bản:</strong> {{ $book->publisher }}</p>
            <p><strong>Ngày xuất bản:</strong> {{ date('d/m/Y', strtotime($book->publication)) }}</p>
            <p><strong>Loại sách:</strong> {{ $book->category_name }}</p>
            <p><strong>Số lượng còn lại:</strong> {{ $book->quantity }}</p>
            <h2>Giá bán: {{ number_format($book->price) }} VNĐ</h2>
            <button>Thêm vào giỏ hàng</button>
        </div>
    </div>
</body>
</html>