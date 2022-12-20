@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12 ">
    <div class="card"><div class="card-header">
        <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Agregar Categoria
            <a href="{{url('admin/category')}}" class="btn btn-primary float-end shadow p-3 px-5 mx-4 bg-body rounded">Atras</a>
             </h2>
    </div>
    <div class="card-body border border-4 shadow p-3 mb-5 bg-body rounded">
        <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

            <div class="col-md-6 mb-3">
                <label>Nombre</label>
                <input type="text" name="name" class="form-control" />
                @error('name') <small class="text-danger">{{$message}}</small>@enderror

            </div>
            <div class="col-md-6  mb-3">
                <label>Slug</label>
                <input type="text" name="slug" class="form-control" />
                @error('slug') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-md-12  mb-3">
                <label>Descripcion</label>
                <input type="text" name="description" class="form-control" row="3"></textarea>
                @error('description') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>Imagen</label>
                <input type="file" name="image" class="form-control" />
                @error('image') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-md-6  mb-3">
                <label>Estado</label> <br/>
                <input type="checkbox" name="status" />
            </div>
            <div class="col-md-12  mb-3">
                <button type="submit" class="btn btn-primary float-end shadow p-3 px-5 mx-4 bg-body rounded">Guardar</button>
            </div>
    </div>
</form>
    </div>
</div>


</div>
</div>
@endsection
