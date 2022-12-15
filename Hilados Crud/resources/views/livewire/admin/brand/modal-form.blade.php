<!-- Brand creater -->
<div wire:ignore.self class="modal fade " id="addbrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Tipos</h1>
          <button type="button" wire:click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="storeBrand">


        <div class="modal-body">
          <div class="mb-3">
            <label >Nombre de tipos</label>
            <input type="text" wire:model.defer="name" class="form-control">
            @error('name') <small class="text-danger">{{$message}} </small>@enderror
          </div>
          <div class="mb-3">
            <label >Slug </label>
            <input type="text" wire:model.defer="slug"  class="form-control">
            @error('slug') <small class="text-danger">{{$message}} </small>@enderror
          </div>
          <div class="mb-3">
            <label >status</label><br>
            <input type="checkbox" wire:model.defer="status" > <p class="mb-3 text-primary"> check para que se guarde y no se muestre en la pagina principal</p>
            @error('status') <small class="text-danger">{{$message}} </small>@enderror
        </div>

        </div>
        <div class="modal-footer">
            <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade " id="updatebrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Tipos</h1>
          <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <form wire:submit.prevent="updateBrand">

            <div class="modal-body">
            <div class="mb-3">
                <label >Nombre de tipos</label>
                <input type="text" wire:model.defer="name" class="form-control">
                @error('name') <small class="text-danger">{{$message}} </small>@enderror
            </div>
            <div class="mb-3">
                <label >Slug </label>
                <input type="text" wire:model.defer="slug"  class="form-control">
                @error('slug') <small class="text-danger">{{$message}} </small>@enderror
            </div>
            <div class="mb-3">
                <label >status</label><br>
                <input type="checkbox" wire:model.defer="status" style="width:70px;height=70px;" > <p class="mb-3 text-primary"> check para que se guarde y no se muestre en la pagina principal</p>
                @error('status') <small class="text-danger">{{$message}} </small>@enderror
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Canbios</button>
            </div>
            </form>

      </div>

    </div>
  </div>


  <!-- Brand Update Modal -->
<div wire:ignore.self class="modal fade " id="deletebrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content ">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Elimnar Tipos</h1>
          <button type="button" class="btn-close" wire:click="closeModal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <form wire:submit.prevent="destroyBrand">

            <div class="modal-body">
                <h4>Estas Seguro de Eliminar ese Campo</h4>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Eliminar</button>
            </div>
            </form>

      </div>

    </div>
  </div>
