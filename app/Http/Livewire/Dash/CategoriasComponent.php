<?php

namespace App\Http\Livewire\Dash;

use Livewire\Component;

use Illuminate\Support\Str;

use App\Models\Categoria;

class CategoriasComponent extends Component{

    public $nombre;
    public $moCategoria;

    public function store(){

        $this->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria = new Categoria;
        $categoria->nombre = Str::title($this->nombre);        
        $categoria->save();

        $this->reset(['nombre']);
        
    }

    public function edit($categoria_id){
        $this->moCategoria = Categoria::find($categoria_id);
        $this->nombre = $this->moCategoria->nombre;
    }

    public function update(){

        $this->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $this->moCategoria->nombre = Str::title($this->nombre);        
        $this->moCategoria->save();
        
    }

    public function delete($categoria_id){
        $this->moCategoria = Categoria::find($categoria_id);
    }
    
    public function destroy(){
        $this->moCategoria->delete();
        return redirect()->route('dash.categorias');
    }

    public function close(){
        $this->reset(['nombre', 'moCategoria']);
        $this->resetValidation();
    }

    public function render(){
        return view('livewire.dash.categorias-component',[
            'categorias' => Categoria::orderBy('nombre')->get()
        ])->layout('layouts.dash');
    }

}
