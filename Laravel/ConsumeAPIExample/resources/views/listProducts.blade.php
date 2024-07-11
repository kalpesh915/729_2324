<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Products</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="conatiner-fluid">
        @foreach ($productsData as $product)
            <div class="row border rounded my-3">
                <div class="col-md-3 p-3">
                    <img src="{{ $product['thumbnail'] }}">
                </div>
                <div class="col-md-9 p-3">
                    <h1>{{ $product["title"] }}</h1>
                    <h1>{{ $product["price"]}}</h1>
                    <p class="lead">{{ $product["description"] }}</p>
                    <p class="lead">Category : {{ $product["category"] }}</p>

                    <hr>
                    <a href="/viewproduct/{{$product['id']}}" class="btn btn-primary">View More</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>