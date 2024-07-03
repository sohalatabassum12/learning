<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        Name:<input type="text" name="name" value="{{$product->name}}">
        Price:<input type="number" name="price" value="{{$product->price}}">
        <button type="submit">submit</button>
    </form>


</body>
</html>