<?php

namespace App\Http\Livewire\Dash;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Intervention\Image\Facades\Image;

use App\Models\Articulo;
use App\Models\Categoria;

class ArticulosComponent extends Component{

    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $categoria;
    public $titulo;
    public $subtitulo;
    public $cuerpo;
    public $imagen;

    public $categorias;
    public $lwMoArticulo;
    public $parrafos;

    public $busqueda;

    public function mount(){
        $this->categorias = Categoria::orderBy('nombre')->get();
    }

    public function updatingBusqueda(){
        $this->resetPage();
    }

    public function estado($articulo_id){
        $articulo = Articulo::find($articulo_id);
        if($articulo->estado){
            $articulo->estado = 0;
        }else{
            $articulo->estado = 1;
        }
        $articulo->save();
    }

    public function store(){

        $this->validate([
            'categoria' => 'required',
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'required|string|max:255',
            'cuerpo' => 'required|string',
            'imagen' => 'required|image|max:5120',
        ]);

        $articulo = new Articulo;
        $articulo->categoria_id = $this->categoria;
        $articulo->titulo = $this->titulo;
        $articulo->subtitulo = $this->subtitulo;
        $articulo->cuerpo = $this->cuerpo;

        // upload imagen
        $path = $this->imagen->store('public/articulos/imagenes');
        Image::make('../storage/app/'.$path)->resize(1080, 720)->save();
        $articulo->imagen = $path;            

        $articulo->save();

        $this->reset(['categoria', 'titulo', 'subtitulo', 'cuerpo', 'imagen']);
        
    }

    public function show($articulo_id){
        $this->lwMoArticulo = Articulo::find($articulo_id);
        $this->parrafos = Str::of($this->lwMoArticulo->cuerpo)->split('/[\n]+/');
    }

    public function close(){
        $this->reset(['categoria', 'titulo', 'subtitulo', 'cuerpo', 'imagen']);
        $this->resetValidation();
    }

    public function render(){
        return view('livewire.dash.articulos-component',[
            'articulos' => Articulo::where('titulo', 'like', '%'.$this->busqueda.'%')->orderBy('created_at', 'desc')->paginate(10)
        ])->layout('layouts.dash');
    }

}