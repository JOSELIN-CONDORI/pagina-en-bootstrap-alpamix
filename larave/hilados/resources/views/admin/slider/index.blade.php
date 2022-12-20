@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 ">
        @if (session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
        <div class="card">
            <div class="card-header rounded bg-body">
                <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Lista de Sliders
               <a href="{{url('admin/sliders/create')}}" class="btn btn-primary float-end shadow p-3  bg-body rounded">Agregar Slider</a>
            </h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-triped border border-4 shadow p-3 mb-5 bg-body rounded">
                <thead class="bg-primary text-center shadow bg-body-primary rounded">
                    <tr >
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Imagen</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($sliders as $slider )
                    <tr>
                        <td>{{$slider->id}}</td>
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>

                        <td>
                        <img src="{{ asset("$slider->image")}}" style="width: 70px; height: 70px" alt="">
                        </td>

                        <td>{{$slider->status == '1'? 'oculto':'visible' }}</td>
                        <td>
                            <a href="{{url('admin/sliders/'.$slider->id.'/edit')}}" class="btn btn-success shadow rounded">Editar</a>
                            <a href="{{url('admin/sliders/'.$slider->id.'/delete')}}"onclick="return confirm('Estas seguro de Elimnar Este Dato')" class="btn btn-danger shadow rounded">eliminar</a>
                        </td>
                    </tr>

                @endforeach


                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

@endsection
