
<div>

    @include('livewire.admin.brand.modal-form')

 <div class="row">
    <div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h4>
                Lista de Tipos de Hilados
                <a href="#" class="btn btn-primary btn-sm float-end"  data-bs-toggle="modal" data-bs-target="#addbrandModal">Agregar Mas</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($brands as $brand )
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->slug}}</td>
                        <td>{{$brand->status == '1' ?'hideen':'visible'}}</td>
                        <td>
                            <a href="#" wire:click="editBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#updatebrandModal" class="btn btn-sm btn-success">Editar</a>
                            <a href="#" wire:click="deleteBrand({{$brand->id}})" data-bs-toggle="modal" data-bs-target="#deletebrandModal" class="btn btn-sm btn-danger">Eliminar</a>
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
