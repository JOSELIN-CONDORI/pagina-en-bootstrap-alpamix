@extends('layouts.admin')

@section('content')
<div class="col-md-12 grid-margin">
    <div class="d-flex justify-content-between flex-wrap">
      <div class="d-flex align-items-end flex-wrap">
        <div class="me-md-3 me-xl-5">


          @if(session('message'))

          @endif
          <p class="mb-md-0"></p>
        </div>
    <h2 class="text-primary p-2 shadow bg-body ">Bienvenido Al Centro De Control de AlpaMix </h2>
      </div>
      <div class="d-flex justify-content-between align-items-end flex-wrap">
        <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block shadow bg-body ">
          <i class="mdi mdi-download text-muted"></i>
        </button>
        <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0 shadow bg-body">
          <i class="mdi mdi-clock-outline text-muted"></i>
        </button>
        <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0 shadow bg-body">
          <i class="mdi mdi-plus text-muted"></i>
        </button>
        <button class="btn btn-primary mt-2 mt-xl-0 rounded shadow bg-body">Generate report</button>
      </div>
    </div>
  </div>
</div>

@endsection
