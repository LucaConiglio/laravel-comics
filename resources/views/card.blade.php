@extends('layouts.layout')

@section('content')



<div class="d-flex align-items-center justify-content-center flex-column">
  <h4 class="text-danger py-3">{{$comic['title']}}</h4>
    <img class="mb-4" src="{{$comic['thumb']}}" alt="image">

  <p class="pb-3 px-5 fw-semibold">{{$comic["description"]}}</p>

  <p class="pb-3 px-5 fw-semibold">Artist by: @foreach ($comic["artists"] as $artist )
    {{$artist}},
  @endforeach. </p>

  <p class="pb-3 px-5 fw-semibold">Written by:  @foreach ($comic["writers"] as $writer )
    {{$writer}},
  @endforeach. </p>


  <button class="btn btn-info mb-3"><a class="py-3 text-decoration-none" href="{{route("home")}}">Return to Home</a></button>
  
    
</div>


@endsection