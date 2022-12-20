@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12  ">
    <div class="card"><div class="card-header ">
        <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Editar sliders
            <a href="{{url('admin/sliders')}}" class="btn btn-primary float-end shadow p-3 px-5 mx-4  bg-body rounded">Atras</a>
         </h2>
    </div>
    <div class="card-body  border border-4 shadow p-3 mb-5 bg-body rounded">
        <form action="{{url('admin/sliders/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

            <div class="col-md-6 mb-3">
                <label>Titulo</label>
                <input type="text" name="title" value="{{$slider->title}}" class="form-control" />
                @error('title') <small class="text-danger">{{$message}}</small>@enderror

            </div>
            <div class="col-md-12  mb-3">
                <label>Descripcion</label>
                <input type="text" name="description" value="{{$slider->description}}" class="form-control" row="3"></textarea>
                @error('description') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>Imagen</label>
                <input type="file" name="image" class="form-control" /> <br>
                <img src="{{asset("$slider->image")}}" style="width: 50px;height: 50px;" alt="">
            </div>
            <div class="col-md-6  mb-3">
                <label>Estado</label> <br/>
                <input type="checkbox" name="status" {{$slider->status == '1'? 'checked':''}} />
            </div>
            <div class="col-md-12  mb-3">
                <button type="submit" class="btn btn-primary float-end shadow p-3 px-5 mx-4 bg-body rounded">Actualizar</button>
            </div>
    </div>
</form>
    </div>
</div>


</div>
</div>
@endsection
