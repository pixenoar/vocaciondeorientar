<div>

    <div class="d-none d-lg-block mb-5">
        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a href="javascript:void(0)" wire:click="setCategoria(0)" class="nav-link @if($categoria_id == 0) active rounded-pill @endif">Todos</a>
            </li>
            @foreach($moCategorias as $categoria)
                <li class="nav-item">
                    <a href="javascript:void(0)" wire:click="setCategoria({{ $categoria->id }})" class="nav-link @if($categoria_id == $categoria->id) active rounded-pill @endif">{{ $categoria->nombre }}</a>
                </li>       
            @endforeach
        </ul>
    </div>


    <div class="d-lg-none text-center mb-3">
        <div class="dropdown-center">
            <a href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-filter-circle-fill fs-2"></i></a>
            <ul class="dropdown-menu border-0 shadow">
                <li class="px-2"><a href="javascript:void(0)" wire:click="setCategoria(0)" class="dropdown-item small fw-light @if($categoria_id == 0) active rounded-1 @endif">Todos</a></li>
                @foreach($moCategorias as $categoria)
                    <li class="px-2"><a href="javascript:void(0)" wire:click="setCategoria({{ $categoria->id }})" class="dropdown-item small fw-light @if($categoria_id == $categoria->id) active rounded-1 @endif"">{{ $categoria->nombre }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>


    



    <div wire:loading.remove wire:target="setCategoria">
        <div class="row g-4 g-lg-5">
        @foreach($articulos as $articulo)
            <div class="col-lg-4">
                <div class="card shadow-sm border-0 h-100">
                    <a href="#articuloModal" wire:click="verArticulo({{ $articulo->id }})" data-bs-toggle="modal">
                        <img src="{{ Storage::url($articulo->imagen) }}" class="card-img-top" alt="{{ $articulo->titulo }}">
                    </a>
                    <div class="card-body py-4">
                        <div class="d-flex justify-content-between align-items-center small mb-3">
                            <div>
                                <a href="javascript:void(0)" wire:click="setCategoria({{ $articulo->categoria->id }})" class="text-decoration-none btn btn-secondary btn-sm">{{ $articulo->categoria->nombre }}</a>
                            </div>
                            <div>
                                <span>{{ $articulo->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <h4 class="card-title h5 fw-light mb-0">
                            <a href="#articuloModal" wire:click="verArticulo({{ $articulo->id }})" data-bs-toggle="modal" class="link-dark text-decoration-none">{{ $articulo->titulo }}</a>
                        </h4>
                    </div>
                </div>
            </div>       
        @endforeach
        </div>
    </div>  

    <div wire:loading.block wire:target="setCategoria">
        <div class="d-flex justify-content-center">
            <div class="spinner-border spinner-border-sm text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>                     
        </div>
                
    </div>


    

    <div class="text-center mt-5">
        <button type="button" wire:click="cargar" class="btn btn-primary btn-sm btn-pill" wire:target="cargar" wire:loading.class="disabled">
            <div wire:loading.remove wire:target="cargar">
                MOSTRAR MÁS
            </div>                        
            <div wire:loading wire:target="cargar">
                <div class="spinner-border spinner-border-sm text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </button>
    </div>

    @include('site.includes.modal-articulo')

</div>