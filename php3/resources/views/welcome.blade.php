<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <h1>Trang chủ</h1>
    <div>
        <a href="{{route ('admin.users')}}">admin user</a> |
        <a href="{{route ('admin.products')}}">admin product</a> |
        <a href="{{route ('products.comment',['slug'=>'iphone','id'=>12])}}">product comment</a>
    </div>
</body>
</html>