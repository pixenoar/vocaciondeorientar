<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

use Illuminate\Support\Str;

use App\Models\Categoria;
use App\Models\Articulo;

class Articulos extends Component{

    public $moCategorias;
    public $moArticulo;
    public $cantidad = 6;
    public $categoria_id = 0;
    public $parrafos;

    // --------

    public function mount(){
        $this->moCategorias = Categoria::orderBy('nombre')->get();
    }
    
    public function setCategoria($categoria_id){
        $this->categoria_id = $categoria_id;
        $this->reset('cantidad');
        usleep(200000);
    }

    public function cargar(){
        $this->cantidad = $this->cantidad + 3;
        usleep(200000);
    }    

    public function verArticulo($articulo_id){
        $this->moArticulo = Articulo::find($articulo_id);
        $this->parrafos = Str::of($this->moArticulo->cuerpo)->split('/[\n]+/');
        usleep(400000);
    }

    // --------

    public function render(){
        return view('livewire.site.articulos', [
            'articulos' => Articulo::where('estado', 1)->when($this->categoria_id, function ($query, $cid){ $query->where('categoria_id', $cid); })->orderBy('created_at', 'desc')->limit($this->cantidad)->get(),
        ]);
    }

}