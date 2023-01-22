
@extends('layouts.layout');


@section('content')


<section class="my-section">
    <div class="container">
    </div>
  </section>
  <section class="other-section">
    <div class="container">
      <div class="text-white bg-primary fw-bold fs-4 py-2 px-4 current-series">CURRENT SERIES</div>
      <div class="row g-4">
        @foreach ($comics as $i => $comic  )
        <div  class="col-2">
          <div class="mb-4">
            <div class="my-imgs">
              <a href="/comic/{{$i}}"><img src="{{$comic['thumb']}}" alt="image"></a>
            </div>
          </div >
          <div>
            <h6 class="text-white">{{$comic['title']}}</h6>
          </div>
        </div>
        @endforeach
      </div>
      <div class="text-center mt-4">
        <button class=" my-btn"> LOAD MORE</button>
      </div>
      
    </div>
  </section>
  
  <section class="section-merchandise">
    <div class="container d-flex justify-content-around align-items-center gap-3 px-3">
      {{-- <a v-for="image in merchandise" href="#">
        <img :class="image.class" class="me-2" :src="image.url" alt="">
        {{image.title}}
      </a> --}}
      <a href="#">
        <img class="image.class" class="me-2" src="image.url" alt="">
        image.title
      </a>
      
  
    </div>
    
    
@endsection