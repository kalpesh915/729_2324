<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Home Page</h1>
    {{-- 
        old concepts 
        you need to code in app\view\components\greetings.php file for access
        value of lname 
    --}}
    <x-greetings lname="Pandya"> 
        {{-- New Concetp of pass data with slots --}}
        <x-slot:name>Gaurav</x-slot:name>
        <x-slot:city>Ahamdabad</x-slot:city>
    </x-greetings>
    <a href="/about">About</a>

    <hr>
    <a href="/method1">Method 1</a> |
    <a href="/method2">Method 2</a> |
    <a href="/method3">Method 3</a> | 
    <a href="/method4">Method 4</a> | 
</body>
</html>