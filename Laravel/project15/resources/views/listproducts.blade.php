<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container">
        @foreach ($productsData as $product)
            <div class="row my-4 border p-3">
                <div class="col-sm-3 p-3">
                    <img src="{{ $product['thumbnail']}}">
                </div>
                <div class="col-sm-8 p-5">
                    <h1>{{ $product["title"] }}</h1>
                    <h1>{{ $product["price"] }} Rs.</h1>
                    <p>{{ $product["description"] }}</p>
                    <hr>
                    <p>Category : {{ $product["category"] }}</p>
                    <p>SKU : {{ $product["sku"] }}</p>
                    <p>Rattings : {{ $product["rating"] }}</p>
                    <p>Stock : {{ $product["stock"] }}</p>
                    <a href="/viewproduct/{{$product['id']}}" class="btn btn-primary">Know More</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>