<div wire:ignore.self class="modal fade" id="modalShow" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalShowLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalShowLabel">Vista Previa</h5>
            </div>
            <div class="modal-body p-4">
                @if($moArticulo)
                    <h3 class="fw-light">{{ $moArticulo->titulo }}</h3>
                    <p class="fw-light mb-0">{{ $moArticulo->subtitulo }}</p>
                    <img src="{{ Storage::url($moArticulo->imagen) }}" class="img-fluid my-4" alt="...">
                    @if($parrafos)
                        @foreach($parrafos as $parrafo)
                            <p class="fw-light">{!! $parrafo !!}</p>
                        @endforeach
                    @endif
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" wire:click="$refresh('moArticulo')" class="btn btn-dark mx-0" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>