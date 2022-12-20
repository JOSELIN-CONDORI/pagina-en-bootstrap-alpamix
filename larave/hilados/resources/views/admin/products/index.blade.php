@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header">
            <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Lista De Productos
               <a href="{{url('admin/products/create')}}" class="btn btn-primary float-end shadow p-3  bg-body rounded">Agregar Productos</a>
            </h2>
        </div>
        <div class="card-body rounded bg-body">
            <table class="table table-bordered table-triped border border-4 shadow p-3 mb-5 bg-body rounded">
                <thead class="bg-primary text-center shadow bg-body-primary rounded">
                    <tr>
                        <th>ID</th>
                        <th>Categoria</th>
                        <th>Producto</th>
                        <th>Tipo</th>
                        <th>Estado</th>
                        <th>Accion</th>
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

                        <td><a href="{{url('admin/products/'.$product->id.'/edit')}}" class="btn btn-sm btn-success shadow rounded">Editar</a>
                        <a href="{{url('admin/products/'.$product->id.'/delete')}}" onclick="return confirm('Estas Seguro de Eliminarlo')" class="btn btn-sm btn-danger shadow rounded">Eliminar</a>
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
