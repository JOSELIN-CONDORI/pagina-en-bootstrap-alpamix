<div>

    <div class="row">
        <div class="col-md-2">
            @if ($category->brands)

            <div class="card">
                <div class="card-header"><h4>Filtrar por Tipos</h4></div>
                <div class="card-body">
                    @foreach ($category->brands as $brandItem)
                    <label class="d-block">
                        <input type="checkbox" wire:model="brandInputs" value="{{$brandItem->name}}"/>{{$brandItem->name}}
                    </label>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
        <div class="col-md-9">

            <div class="row">
                @forelse ($products as $productItem )
                <div class="col-lg-4 col-md-12 ">
                <div class="card" style="width: 18rem;">
            @if ($productItem->productImages->count() > 0)
            <img src="{{asset($productItem->productImages[0]->image)}}" style="width: 250px;height:250px;"  class="card-img-top m-3 " alt="...">
            @endif
            <div class="card-body">
                <h3 class="card-title"> {{$productItem->name}}</h3>
                    <h6 class="card-subtitle mb-2  txt">{{$productItem->brand}}</h6>
                <p class="card-text">{{$productItem->description}}</p>
                <a href="#" class="btn btn-light bg-headerr mr-2"><i class="fas fa-link"></i>Contactar</a>
            </div>
            </div>
                </div>
                @empty
                <div class="col-md-12">
                    <div class="p-2"><h4>Sin Productos {{ $category->name }}</h4></div>
                </div>
                @endforelse
            </div>

        </div>
    </div>
</div>
