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
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        Price:<input type="number" name="price">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        img <input type="file" name="image">
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <button type="submit">submit</button>
    </form>

    <hr>
    product

    <br>

    <ul>
        @forelse ($products as $product)
            <li><a href="{{route('product.edit', $product->id)}}">{{$product->name}} - {{$product->price}}</a> <a href="{{route('product.delete', $product->id)}}">delete</a><img height="100px" width="100px" src="{{asset('images/' . $product->image )}}" alt=""></li>
        @empty
            <p>No product found</p>
        @endforelse
    </ul>

</body>
</html>