<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\VagasController;
use App\Http\Controllers\Candidato\CandidatoController;
use App\Http\Controllers\Candidato\CandidaturaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Candidato simples

Route::get('/', [CandidatoController::class,'index']);
Route::get('/vaga/{slug}', [CandidatoController::class,'vagaSingle'])->name('single.vaga');
Route::get('/todas-vagas', [CandidatoController::class,'todasVagas'])->name('todas.vagas');


Route::middleware(['auth'])->group(function(){
    Route::get('dashboard', [CandidatoController::class,'dashboard'])->name('dashboard');
    Route::get('/candidatura/{slug}', [CandidatoController::class,'candidatura'])->name('candidatura');
    Route::post('/candidatura', [CandidaturaController::class,'store'])->name('store.candidatura');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


// Admin
Route::middleware(['auth','admin'])->prefix('admin')->group(function(){

    Route::get('dashboard', [AdminController::class,'index'])->name('admin.dashboard');
    Route::get('categorias', [CategoriaController::class, 'index'])->name('category.index');
    Route::post('categorias', [CategoriaController::class, 'store'])->name('store.category');
    Route::get('todas-vagas', [VagasController::class, 'index'])->name('vagas.index');
    Route::get('publicar-vaga', [VagasController::class, 'create'])->name('vagas.create');
    Route::post('vagas', [VagasController::class, 'store'])->name('vagas.store');
    Route::get('editar-vaga/{id}', [VagasController::class, 'edit'])->name('vaga.edit');
    Route::post('editar-vaga/{id}', [VagasController::class, 'update'])->name('vaga.update');
    Route::get('eliminar-vaga/{id}', [VagasController::class, 'destroy'])->name('delete.vaga');
    Route::post('curriculo/dowload', [AdminController::class, 'donwload'])->name('admin.download');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
