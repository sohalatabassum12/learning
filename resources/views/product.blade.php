<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="{{url('product/create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        Name:<input type="text" name="name">
        Price:<input type="number" name="price">
        <button type="submit">submit</button>
    </form>
</body>
</html>