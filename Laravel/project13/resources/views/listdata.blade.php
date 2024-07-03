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
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-3 text-center">Products</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Rating</th>
                        <th>Stock</th>
                        {{-- <th>Brand</th> --}}
                        <th>SKU</th>
                        <th>Warranty</th>
                        <th>Shipping</th>
                        <th>AVailable</th>
                        <th>Photo</th>
                        <th>View More</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product["id"] }}</td>
                            <td>{{ $product["title"] }}</td>
                            <td>{{ $product["description"] }}</td>
                            <td>{{ $product["category"] }}</td>
                            <td>{{ $product["discountPercentage"] }}</td>
                            <td>{{ $product["price"] }}</td>
                            <td>{{ $product["rating"] }}</td>
                            <td>{{ $product["stock"] }}</td>
                            {{-- <td>{{ $product["brand"] }}</td> --}}
                            <td>{{ $product["sku"] }}</td>
                            <td>{{ $product["warrantyInformation"] }}</td>
                            <td>{{ $product["shippingInformation"] }}</td>
                            <td>{{ $product["availabilityStatus"] }}</td>
                            <td><img src="{{ $product["thumbnail"] }}"></td>
                            <td><a href="/viewmore/{{$product['id'] }}" class="btn btn-primary">More</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>