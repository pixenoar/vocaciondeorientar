<div wire:ignore.self class="modal fade" id="modalCreate" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateLabel">Nueva Categoría</h5>
            </div>
            <form wire:submit.prevent="store">
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" wire:model.defer="nombre" placeholder="Nombre">
                                <label for="nombre">Nombre</label>
                                @error('nombre')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>                    
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="close" class="btn btn-dark mx-0" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" wire:target="store" wire:loading.class="disabled">
                        <div wire:loading.remove wire:target="store">
                            Guardar
                        </div>                        
                        <div wire:loading wire:target="store">
                            Guardando...
                        </div>
                    </button>
                </div>
            </form> 
        </div>
    </div>
</div>