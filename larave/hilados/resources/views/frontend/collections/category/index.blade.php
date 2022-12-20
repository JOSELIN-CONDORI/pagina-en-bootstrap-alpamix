
@extends('layouts.app')
@section('title','Categorias')
@section('content')
@include('layouts.inc.frontend.banner')

<section class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col text-center mb-5">
           <h1 class="display-4 txt1">Tenemos Los Mejores Productos Para Usted</h1>

        </div>
      </div>

    <div class="row">
     @forelse ($categories as $categoryItem)

   <div class="col-sm-12 col-md-6 col-lg-4 mb-4"><div class="card text-white " style="background-image:url('{{asset("$categoryItem->image")}}');">
           <img class="card-img d-none" src="">
          <div class="card-img-overlay d-flex flex-column">

           <div class="card-body"  >
              <h1 class="card-title my-5 "><a class="txt" herf="">{{$categoryItem->name}}</a></h1>
              <p class="mt-12 text-white ">{{$categoryItem->description}}</p>
            </div>
            <a class="btn btn-light bg-headerr" href="{{url('/collections/'.$categoryItem->slug)}}">Ver Productos
            </a>
            <div class="card-footer">
            </div>
          </div>
        </div></div>
        @empty
        <div class="col-md-12"><h5>Sin Categorias</h5></div>
        @endforelse


  </div>

  </div>
  </section>

@endsection
