<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos','index');
    Route::get('/cursos/create','create');
    Route::get('/cursos/{curso}','show');
});

// Route::get('/cursos/{curso}/{categoria?}',function($curso,$categoria=null){
//     if($categoria){
//         return "Este es el curso de : $curso, de la categoria: $categoria"; 
//     }
//     else{
//         return "Este es el curso de : $curso";
//     }
    
// });