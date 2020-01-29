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
//Essas rotas são só pra ver no navegador que o banco está funcionando
Route::get('/', function () {
    //$pet = App\Pet::first();
    // dd($pet->owner);
    $owner = App\owner::first();
    dd($owner, $owner->pets);  //dd é o equivalente ao print_r 
    return view('welcome');
});

// esse primeiro metodo estava fazendo o caminho rota-view
// Route::get('/index', function() {
//     return view('petsIndex');
// });

// nesse aqui é rota-controllers-view
Route::get('/index', 'PetsController@index');
                     //nome do controller @ nome do método (public function index())
