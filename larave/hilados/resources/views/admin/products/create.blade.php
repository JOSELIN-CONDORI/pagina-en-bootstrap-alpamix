@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12  ">
        <div class="card">
            <div class="card-header">
                <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Agregar Productos
               <a href="{{url('admin/products')}}" class="btn btn-primary float-end shadow p-3 px-5 mx-4 bg-body rounded">Atras</a>
                </h2>
        </div>
        <div class="card-body border border-4 shadow p-3 mb-5 bg-body roundedborder border-4 shadow p-3 mb-5 bg-body rounded">
            <form action="{{url('admin/products')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row ">
                <div class="col-md-6 mb-3">
                    <label>Selecciona Categoria:</label>
                    <select name="category_id" class="form-control text-dark border-primary">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control text-dark " />
                    @error('name') <small class="text-danger">{{$message}}</small>@enderror

                </div>
                <div class="col-md-6  mb-3">
                    <label>Slug</label>
                    <input type="text" name="slug" class="form-control text-dark " />
                    @error('slug') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Seleccciona Tipo:</label>
                    <select name="brand" class="form-control text-dark border-primary ">
                    @foreach ($brands as $brand)
                    <option value="{{$brand->name}}">{{$brand->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-12  mb-3">
                    <label>Descripcion</label>
                    <input type="text" name="description" class="form-control text-dark border-indigo" row="3"></textarea>
                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="col-md-6 mb-3 ">
                    <label>Estado</label> <br/>
                    <input type="checkbox" name="status" class="border-primary" />
                </div>
                <div class="col-md-6 mb-3">
                    <label>Imagen</label>
                    <input type="file" name="image[]" multiple class="form-control bg-primary" />
                    @error('image') <small class="text-danger">{{$message}}</small>@enderror
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
