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
    public $moArticulo;
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
        Image::make('../storage/app/'.$path)->fit(1080, 720)->save();
        $articulo->imagen = $path;            

        $articulo->save();

        $this->reset(['categoria', 'titulo', 'subtitulo', 'cuerpo', 'imagen']);
        
    }

    public function edit($articulo_id){
        $this->moArticulo = Articulo::find($articulo_id);
        //$this->parrafos = Str::of($this->moArticulo->cuerpo)->split('/[\n]+/');

        $this->categoria = $this->moArticulo->categoria_id;
        $this->titulo = $this->moArticulo->titulo;
        $this->subtitulo = $this->moArticulo->subtitulo;
        $this->cuerpo = $this->moArticulo->cuerpo;
    }

    public function update(){

        $this->validate([
            'categoria' => 'required',
            'titulo' => 'required|string|max:255',
            'subtitulo' => 'required|string|max:255',
            'cuerpo' => 'required|string',
            'imagen' => 'nullable|image|max:5120',
        ]);

        $this->moArticulo->categoria_id = $this->categoria;
        $this->moArticulo->titulo = $this->titulo;
        $this->moArticulo->subtitulo = $this->subtitulo;
        $this->moArticulo->cuerpo = $this->cuerpo;

        // upload imagen
        if($this->imagen){
            $path = $this->imagen->store('public/articulos/imagenes');
            Image::make('../storage/app/'.$path)->fit(1080, 720)->save();
            $this->moArticulo->imagen = $path;             
        }
           

        $this->moArticulo->save();

        
    }

    public function show($articulo_id){
        $this->moArticulo = Articulo::find($articulo_id);
        $this->parrafos = Str::of($this->moArticulo->cuerpo)->split('/[\n]+/');
    }

    public function close(){
        $this->reset(['categoria', 'titulo', 'subtitulo', 'cuerpo', 'imagen', 'moArticulo']);
        $this->resetValidation();
    }

    public function render(){
        return view('livewire.dash.articulos-component',[
            'articulos' => Articulo::where('titulo', 'like', '%'.$this->busqueda.'%')->orderBy('created_at', 'desc')->paginate(10)
        ])->layout('layouts.dash');
    }

}