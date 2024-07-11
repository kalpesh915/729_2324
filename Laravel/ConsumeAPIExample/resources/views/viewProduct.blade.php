<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $productData['title'] }}</title>
    @include('cdn')
</head>

<body>
    @include('menu')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 p-5 bg-light">
                <!-- Carousel -->
                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                       
                          @for($i=1; $i<=count($productData["images"]); $i++)
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="{{$i}}"></button>
                          @endfor
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ $productData['thumbnail'] }}" alt="Thumbail" class="d-block w-100">
                        </div>

                        @foreach ($productData["images"] as $image)
                          {{-- <p>{{$image}}</p> --}}
                            <div class="carousel-item">
                                <img src="{{ $image }}" class="d-block w-100">
                            </div>
                        @endforeach
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="col-md-6 p-5">
                <h1>{{ $productData['title'] }}</h1>
                <h1> Rs.{{ round($productData['price'] - ($productData['price'] * ($productData['discountPercentage'] / 100)), 2) }} <small>Rs. <del>{{ $productData['price'] }}<del></small></h1>
                  
                <p>Discount {{ $productData['discountPercentage'] }} %</p>
                <hr>
                <div class="text-white p-3 bg-dark">
                    {{ $productData['tags'][0] }} / {{ $productData['tags'][1] }}
                </div>
                <p class="lead">{{ $productData['description'] }}</p>
                <img src="{{ $productData['meta']['qrCode'] }}">
            </div>
        </div>

        <div class="table-responsive">
            <p class="lead">Product Information</p>
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Category</th>
                        <td>{{ $productData['category'] }}</td>
                    </tr>
                    <tr>
                        <th>Rating</th>
                        <td>{{ $productData['rating'] }}</td>
                    </tr>
                    <tr>
                        <th>Stock</th>
                        <td>{{ $productData['stock'] }}</td>
                    </tr>
                    <tr>
                        <th>Brand</th>
                        <td>{{ $productData['brand'] }}</td>
                    </tr>
                    <tr>
                        <th>SKU</th>
                        <td>{{ $productData['sku'] }}</td>
                    </tr>
                    <tr>
                        <th>Weight</th>
                        <td>{{ $productData['weight'] }}</td>
                    </tr>
                    <tr>
                        <th>Dimentions</th>
                        <td> width : {{ $productData['dimensions']['width'] }} x height :
                            {{ $productData['dimensions']['height'] }} x depth :
                            {{ $productData['dimensions']['depth'] }} </td>
                    </tr>
                    <tr>
                        <th>Warranty Information</th>
                        <td>{{ $productData['warrantyInformation'] }}</td>
                    </tr>
                    <tr>
                        <th>Shipping Information</th>
                        <td>{{ $productData['shippingInformation'] }}</td>
                    </tr>
                    <tr>
                        <th>Availability Status</th>
                        <td>{{ $productData['availabilityStatus'] }}</td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{ $productData['meta']['createdAt'] }}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{ $productData['meta']['updatedAt'] }}</td>
                    </tr>
                    <tr>
                        <th>Barcode</th>
                        <td>{{ $productData['meta']['barcode'] }}</td>
                    </tr>

                </tbody>
            </table>
        </div>

        {{-- Reviews --}}
        <div class="row">
            <h1 class="bg-secondary text-white p-3">Reviews</h1>
            <div id="accordion">

                @for ($i = 0; $i < count($productData['reviews']); $i++)
                    <div class="card">
                        <div class="card-header">
                            <a class="btn" data-bs-toggle="collapse" href="#collapse{{ $i }}">
                                {{ $productData['reviews'][$i]['reviewerName'] }} on
                                {{ $productData['reviews'][$i]['date'] }}
                            </a>
                        </div>
                        <div id="collapse{{ $i }}" class="collapse {{ $i == 0 ? 'show' : '' }}"
                            data-bs-parent="#accordion">
                            <div class="card-body">
                                Ratings : {{ $productData['reviews'][$i]['rating'] }}
                                <br>
                                {{ $productData['reviews'][$i]['comment'] }}
                                {{ $productData['reviews'][$i]['reviewerEmail'] }}
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
</body>

</html>
