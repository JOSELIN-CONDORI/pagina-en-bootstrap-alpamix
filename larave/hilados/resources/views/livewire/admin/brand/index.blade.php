
<div>

    @include('livewire.admin.brand.modal-form')

 <div class="row">
    <div class="col-md-12 ">
    <div class="card">
        <div class="card-header">
            <h2 class="text-white py-2 px-2 text-uppercase shadow bg-primary">Lista de Tipos De Hilados
                <a href="#" data-bs-toggle="modal" data-bs-target="#addbrandModal"  class="btn btn-primary float-end shadow p-3  bg-body rounded">Agregar Tipos</a>
             </h2>
        </div>
        <div class="card-body ">
            <table class="table table-bordered table-triped">
                <thead class="bg-primary text-center shadow bg-body-primary rounded">
                    <tr>
                        <th>ID</th>
                        <th>Nombre Tipo</th>
                        <th>Categoria</th>
                        <th>Slug</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($brands as $brand )
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>{{$brand->name}}</td>
                        <td>
                            @if ($brand->category)
                            {{$brand->category->name}}
                           @else
                            Sin Categoría
                            @endif
                        </td>
                        <td>{{$brand->slug}}</td>
                        <td>{{$brand->status == '1' ?'hideen':'visible'}}</td>
                        <td>
                            <a href="#" wire:click="editBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#updatebrandModal" class="btn btn-sm btn-success shadow rounded">Editar</a>
                            <a href="#" wire:click="deleteBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#deletebrandModal" class="btn btn-sm btn-danger shadow rounded">Eliminar</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No se encontraron tipos</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
            <div>
                {{$brands->links()}}
            </div>
        </div>
    </div>
    </div>

 </div>
</div>
@push('script')

    <script>
        window.addEventListener('close-modal', event =>{
            $('#addbrandModal').modal('hide');
            $('#updatebrandModal').modal('hide');
            $('#deletebrandModal').modal('hide');


        });
    </script>
@endpush
