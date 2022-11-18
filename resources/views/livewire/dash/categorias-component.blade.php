<div>
    
    <div class="p-4 p-lg-5">

        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h5 class="fw-bold">Categorías</h5>
            </div>
            <div>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalCreate">Nuevo</button>
            </div>
        </div>

        <div class="card border-0 shadow-sm my-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Artículos</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categorias as $categoria)
                                <tr>
                                    <td>{{ $categoria->nombre }}</td>
                                    <td>{{ $categoria->articulos->count() }}</td>
                                    <td>
                                        <button type="button" wire:click="edit({{ $categoria->id }})"  class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalEdit"><i class="bi bi-pencil"></i></button>
                                        <button type="button" wire:click="delete({{ $categoria->id }})"  class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modalDelete"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center">No se encontraron categorías</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>

        @include('dash.categorias.create')

        @include('dash.categorias.edit')

        @include('dash.categorias.delete')

    </div>

</div>
