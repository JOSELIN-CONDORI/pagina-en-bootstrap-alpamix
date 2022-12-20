@extends('layouts.app')

@section('title','Categorias')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 txt animated zoomIn">Los Mejores Productos Del Mercado</h1>
            <a href="{{url('/collections')}}" class="h5 txt">Atras</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="fibras.artificiales.html" class="h5 text-white">Productos</a>
        </div>
    </div>
</div>


<div class="container mx-auto mt-4 ">
    <div class="row mx-auto container">

        <livewire:frontend.product.index :category="$category"/>
  </div>
    </div>
@endsection
