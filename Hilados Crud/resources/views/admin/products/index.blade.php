@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
            <h4>Productos
               <a href="{{url('admin/products/create')}}" class="btn btn-primary float-end">Agregar Productos</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-triped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Producto</th>
                        <th>Tipo</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($products as $product)
                   <tr>
                    <td>{{ $product->id}}</td>
                        <td>{{ $product->category->name}}</td>
                        <td>{{ $product->name}}</td>
                        <td>{{ $product->brand}}</td>
                        <td>{{ $product->status == '1' ? 'oculto' :'visible'}}</td>
                        <td>{{ $product->id}}</td>
                        <td><a href="{{url('admin/products/'.$product->id.'/edit')}}" class="btn btn-sm btn-success">Editar</a>
                        <a href="{{url('admin/products/'.$product->id.'/delete')}}" onclick="return confirm('Estas Seguro de Eliminarlo')" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                   @empty
                   <tr>
                    <td colspan="Sin Productos">

                    </td>
                </tr>
                   @endforelse

                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

@endsection
