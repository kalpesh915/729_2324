<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project - @yield("title")</title>
    @include('commons.cdn')
</head>
<body>
    @include("commons.header")
    @include("commons.menu")
    
    <div class="conatiner-fluid">
        <div class="row">
            <div class="col-lg-9 p-3">
                @yield("maindata")
            </div>
            <div class="col-md-3">
                @include("commons.sidebar")
            </div>
        </div>
    </div>

    @include("commons.footer")
</body>
</html>