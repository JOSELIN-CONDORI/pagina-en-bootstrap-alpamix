@extends('layouts.admin')

@section('content')
<div class="row">
<div class="col-md-12 ">
    <div class="card"><div class="card-header">
        <h4>Agregar sliders
           <a href="{{url('admin/sliders')}}" class="btn btn-danger float-end">Atras</a>
        </h4>
    </div>
    <div class="card-body">
        <form action="{{url('admin/sliders/create')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">

            <div class="col-md-6 mb-3">
                <label>title</label>
                <input type="text" name="title" class="form-control" />
                @error('title') <small class="text-danger">{{$message}}</small>@enderror

            </div>
            <div class="col-md-12  mb-3">
                <label>Description</label>
                <input type="text" name="description" class="form-control" row="3"></textarea>
                @error('description') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-md-6 mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control" />
                @error('image') <small class="text-danger">{{$message}}</small>@enderror
            </div>
            <div class="col-md-6  mb-3">
                <label>Status</label> <br/>
                <input type="checkbox" name="status" />
            </div>
            <div class="col-md-12  mb-3">
                <button type="submit" class="btn btn-primary float-end">Guardar</button>
            </div>
    </div>
</form>
    </div>
</div>


</div>
</div>
@endsection
