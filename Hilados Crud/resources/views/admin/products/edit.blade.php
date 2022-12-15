@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
        <h5 class="alert alert-success mb-2">{{session('message')}}</h5>
         @endif
        <div class="card">
            <div class="card-header">
            <h2>Editar Productos
               <a href="{{url('admin/products')}}" class="btn btn-danger float-end">Regresar</a>
            </h2>
        </div>
        <div class="card-body">

            <form action="{{url('admin/products/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Selecciona Categoria:</label>
                    <select name="category_id" class="form-control text-dark border-primary">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected':''}}>
                        {{$category->name}}</option>
                    @endforeach
                </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Producto Nombre</label>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control text-dark " />
                    @error('name') <small class="text-danger">{{$message}}</small>@enderror

                </div>
                <div class="col-md-6  mb-3">
                    <label>Producto Slug</label>
                    <input type="text" name="slug" value="{{$product->slug}}" class="form-control text-dark " />
                    @error('slug') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>Seleccciona Tipo:</label>
                    <select name="brand" class="form-control text-dark border-primary ">
                    @foreach ($brands as $brand)
                    <option value="{{$brand->name}}" {{$brand->name == $product->brand ? 'selected':''}}>
                        {{$brand->name}}</option>
                    @endforeach
                </select>
                </div>
                <div class="col-md-12  mb-3">
                    <label>Producto Descripcion</label>
                    <input type="text" name="description"value="{{$product->slug}}"  class="form-control text-dark border-indigo" row="3"></textarea>
                    @error('description') <small class="text-danger">{{$message}}</small>@enderror
                </div>
                <div class="col-md-6 mb-3 ">
                    <label>Producto Estado</label> <br/>
                    <input type="checkbox" name="status"{{$product->status == '1' ? 'cheked':''}} class="border-primary" />
                </div>
                <div class="col-md-6 mb-3">
                    <label>Subir Imagen</label>
                    <input type="file" name="image[]" multiple class="form-control bg-primary" />
                </div>
                <div>
                    @if($product->productImages )
                    <div class="row">
                        @foreach ($product->productImages as $image )
                        <div class="col-md-2">
                            <img src="{{ asset($image->image)}}" style="width: 80px;height:80px;" class="me-4 border"  />
                            <a href="{{url('admin/product-image/'.$image->id.'/delete')}}" class="d-block">Eliminar</a>
                        </div>
                         @endforeach
                    </div>



                    @else
                    <h5>No Hay Imagenes</h5>
                    @endif
                </div>
                <div class="py-2 float-end ">
                    <button type="submit" class="btn btn-primary float-end">ACTUALIZAR</button>
                </div>
        </div>
    </form>
        </div>
    </div>


    </div>
    </div>
    @endsection
