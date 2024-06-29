@extends("layout.masterlayout")

@section("title")
    URL
@endsection

@section("pagecontent")
  <h1>URL Demo Page</h1>  
  <p>{{ URL::current() }}</p>
  <p>{{ URL::full() }}</p>
  <p><a href="{{ URL::to('/') }}">Home</a></p>
  <p><a href="{{ URL::previous() }}">Back</a></p>
@endsection