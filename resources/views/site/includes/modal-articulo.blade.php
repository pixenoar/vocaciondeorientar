<div wire:ignore.self class="modal fade" id="articuloModal" tabindex="-1" aria-labelledby="articuloModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-fullscreen">
        <div class="modal-content border-0">

            <div class="modal-header border-0 justify-content-end px-4 py-3 shadow-sm">
                <a href="#" class="link-dark" data-bs-dismiss="modal"><i class="bi bi-x-lg fs-4"></i></a>
            </div>  
            
            
            <div class="modal-body">
                @if($moArticulo)

                    <div wire:loading.remove wire:target="verArticulo">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="mb-3"><span class="badge bg-dark fw-light">{{ $moArticulo->categoria->nombre }}</span><span class="small ms-2">{{ $moArticulo->created_at->diffForHumans() }}</span></div>
                                <h1 class="h2 fw-light">{{ $moArticulo->titulo }}</h1>
                                <p class="fw-light mb-0">{{ $moArticulo->subtitulo }}</p>
                                <img src="{{ Storage::url($moArticulo->imagen) }}" class="img-fluid my-4" alt="...">
                                @foreach($parrafos as $parrafo)
                                    <p class="fw-light">{!! $parrafo !!}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div wire:loading wire:target="verArticulo">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>                        
                        </div>
                    </div>
                @endif                    
            </div>

        </div>
    </div>
</div>