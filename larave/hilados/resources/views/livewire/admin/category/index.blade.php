<div>
    <div wire:ignore.self  class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Categoria</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                <h6>Estas Seguro de Eliminar Esta Categoria?</h6>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
                </div>
            </form>
          </div>
        </div>
      </div>


        <div class="row">

            <div class="col-md-12 ">

                @if(session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif

                <div class="card"><div class="card-header">
                    <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Lista de Categorias
                        <a href="{{url('admin/category/create')}}" class="btn btn-primary float-end shadow p-3  bg-body rounded">Agregar Categorias</a>
                     </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped border border-4 shadow p-3 mb-5 bg-body rounded">
                        <thead class="bg-primary text-center shadow bg-body-primary rounded">
                            <tr>
                                <th>ID</th>
                                <th>Nombre Categoria</th>
                                <th>Estado</th>
                                <th>Accion</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )

                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->status == '1'? 'oculto':'visible'}}</td>
                                <td>
                                    <a href="{{url('admin/category/'.$category->id.'/edit')}}"class="btn btn-success shadow rounded" >Editar</a>
                                    <a href="#" wire:click="deleteCategory({{$category->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger shadow rounded">Eliminar</a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                    <div>
                        {{$categories->links()}}
                    </div>

                </div>
                </div>






        </div>
</div>

