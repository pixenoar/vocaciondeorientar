<div wire:ignore.self class="modal fade" id="modalCreate" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalCreateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalCreateLabel">Nuevo Artículo</h5>
            </div>
            <form wire:submit.prevent="store">
                <div class="modal-body p-4">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <select class="form-select @error('categoria') is-invalid @enderror" id="categoria" wire:model.defer="categoria">
                                    <option value="" selected>Seleccionar</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                <label for="categoria">Categoría</label>
                                @error('categoria')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div> 
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" wire:model.defer="titulo" placeholder="Título">
                                <label for="titulo">Título</label>
                                @error('titulo')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <input type="text" class="form-control @error('subtitulo') is-invalid @enderror" id="subtitulo" wire:model.defer="subtitulo" placeholder="Subtítulo">
                                <label for="subtitulo">Subtítulo</label>
                                @error('subtitulo')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-floating">
                                <textarea class="form-control @error('cuerpo') is-invalid @enderror" wire:model.defer="cuerpo" id="floatingTextarea2" placeholder="Cuerpo" style="height: 15rem"></textarea>
                                <label for="cuerpo">Cuerpo</label>
                                @error('cuerpo')
                                    <span class="invalid-feedback">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="alert alert-info small mt-1 mb-0 p-2" role="alert">
                                Ejemplo para insertar link: <code>&lt;a href="https://pixeno.ar" target="_blank"&gt;diseño web&lt;/a&gt;</code>
                            </div>
                        </div>    
                        <div class="col-lg-12">
                            <div class="border rounded p-3">
                                <label for="imagen" class="form-label">Adjuntar Imagen</label>
                                <input id="imagen" type="file" wire:model.defer="imagen" class="form-control @error('imagen') is-invalid @enderror">
                                <div class="form-text">La orientación de la imagen debe ser horizontal.</div>
                                @error('imagen')
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