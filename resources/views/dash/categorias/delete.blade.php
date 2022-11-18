<div wire:ignore.self class="modal fade" id="modalDelete" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDeleteLabel">Eliminar Categoría</h5>
            </div>
            <form wire:submit.prevent="destroy">
                <div class="modal-body p-4">
                    @if($moCategoria && !$moCategoria->articulos->count())
                        <div class="text-center">
                            <h5 class="fw-bold">{{ $moCategoria->nombre }}</h5>
                            <div class="mb-0">¿Esta seguro que quiere eliminar la categoría?</div>
                        </div>
                    @else
                        <div class="text-center">
                            <div class="mb-0">No se puede eliminar la categoría porque tiene artículos vinculados.</div>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click="close" class="btn btn-dark mx-0" data-bs-dismiss="modal">Cerrar</button>
                    @if($moCategoria && !$moCategoria->articulos->count())
                        <button type="submit" class="btn btn-danger" wire:target="destroy" wire:loading.class="disabled">
                            <div wire:loading.remove wire:target="destroy">
                                Eliminar
                            </div>                        
                            <div wire:loading wire:target="destroy">
                                Eliminando...
                            </div>
                        </button>
                    @endif
                </div>
            </form> 
        </div>
    </div>
</div>