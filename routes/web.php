<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Dash\ArticulosComponent;
use App\Http\Livewire\Dash\CategoriasComponent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    return view('site.index');
})->name('site.home');


Route::prefix('dashboard')->group(function(){

    Route::get('/', function () {
        return redirect()->route('dash.articulos');
    })->name('dashboard');

    Route::get('articulos', ArticulosComponent::class)->middleware(['auth'])->name('dash.articulos');
    Route::get('categorias', CategoriasComponent::class)->middleware(['auth'])->name('dash.categorias');

});

require __DIR__.'/auth.php';


Route::get('slink', function () {
    Artisan::call('storage:link');
});