<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Blade File</title>
</head>
<body>
    {{-- {{ 15 + 15 }}
    {{ "Rajkot" }}

    {{ "Welcome, "}}
    {{ $username}}

    {{ "<h1>This Is Heading Tag of HTML</h1>" }}

    {!! "<h1>This Is Heading Tag of HTML</h1>" !!} --}}

    {{-- @php
        echo "Welcome";
    @endphp --}}

    {{-- @if (10 == 10)
        "True"
    @else
        "False"
    @endif --}}

    {{-- @for ($i=1; $i<=10; $i++)
        {{ $i }}
    @endfor --}}

    {{-- @php
        print_r($students);
    @endphp --}}
        
    {{-- @foreach ($students as $key => $value)
        <p>Welcome {{$value}} your id is {{$key}}</p>
    @endforeach --}}
    
    {{-- @foreach ($students as $key => $value)
        @if ($loop->even)
            <p style="color:red;">Welcome {{$value}} your id is {{$key}} </p>
        @else
            <p style="color:blue;">Welcome {{$value}} your id is {{$key}}</p>
        @endif 
    @endforeach --}}

    {{--    
        $loop->index 	The index of the current loop iteration (starts at 0).
        $loop->iteration 	The current loop iteration (starts at 1).
        $loop->remaining 	The iterations remaining in the loop.
        $loop->count 	The total number of items in the array being iterated.
        $loop->first 	Whether this is the first iteration through the loop.
        $loop->last 	Whether this is the last iteration through the loop.
        $loop->even 	Whether this is an even iteration through the loop.
        $loop->odd 	Whether this is an odd iteration through the loop.
        $loop->depth 	The nesting level of the current loop.
        $loop->parent 	When in a nested loop, the parent's loop variable.
    --}}

    {{-- @isset($username)
        <h1>Admin User</h1>
    @else
        <h1>Guest User</h1>
    @endisset --}}

    {{-- @empty($username)
        <h1>Username not available</h1>
    @else
        <h1>Welcome {{$username}}</h1>
    @endempty --}}

    <script>
        //alert("Welcome to JS");
        let students = @json($students);
        //alert(students);
        //console.log(students);
        alert(JSON.stringify(students));
    </script>
</body>
</html>