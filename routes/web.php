<?php

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
//pagina inicial
Route::get('/', function () {
    return view('index');
});


    //menu administrativo
Route::prefix('administrativo')->group(function () {
    
    //pagina inicial administrativo
    Route::get('/', function () {
        return view('administrativo/index');
    });
    
    //submenu aluno
    Route::prefix('aluno')->group(function () {
            
        //pagina inicial aluno
        Route::get('/', function () {
            return view('administrativo/alunos/index');
        });
           
    });
    
    //submenu responsavel
    Route::prefix('responsavel')->group(function () {
     
    //pagina inicial responsavel
        Route::get('/', function () {
            return view('administrativo/responsaveis/index');
        });
                
    });
    
    //submenu colaborador
    Route::prefix('colaborador')->group(function () {
            
        //pagina inicial colaborador
        Route::get('/', function () {
            return view('administrativo/colaboradores/index');
        });
                
    });
    
    //submenu avisos
    Route::prefix('avisos')->group(function () {
            
        //pagina inicial avisos
        Route::get('/', function () {
            return view('administrativo/avisos/index');
        });
    
    });
});