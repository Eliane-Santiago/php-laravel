<?php

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

/*
|--------------------------------------------------------------------------
|MODELOS DE ROTAS USANDO FUNÇÃO CALLBACK
|--------------------------------------------------------------------------
|
| //ROTA PRINCIPAL
| Route::get('/', function () {
|    return 'Olá, seja bem vindo ao curso!';
| });
|
| //ROTA SOBRE-NOS
| Route::get('/sobre-nos', function () {
|    return 'Sobre-nós';
| });
|
| //ROTA CONTATO
| Route::get('/contato', function () {
|    return 'Contato';
| });
|
|
*/

Route::get('/login', function () { return 'Login'; })->name('site.login');

//ROTAS AGRUPADAS NO PREFIXO APP
Route::prefix('/app')->group(function(){
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});


//REDIRECIONAMENTO DE ROTAS - ATRAVÉS DO MÉTODO REDIRECT DO OBJETO ROUTE
/*
Route::get('/rota1', function(){
	echo 'Rota 1';
})->name('site.rota1');

Route::redirect('/rota2', '/rota1');
*/


//REDIRECIONAMENTO DE ROTAS - ATRAVÉS DA FUNÇÃO CALLBACK/CONTROLLER
/*
Route::get('/rota1', function(){
	echo 'Rota 1';
})->name('site.rota1');


Route::get('/rota2', function(){
	return redirect()->route('site.rota1');
})->name('site.rota2');
*/

//FUNÇÃO DE FALLBACK - APONTANDO PARA UMA FUNÇÃO CALLBACK, MAS A FUNÇÃO FALLBACK PODERIA APONTAR PARA UM CONTROLLER, UMA VIEW...
Route::fallback(function(){
	echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});


/*
|--------------------------------------------------------------------------
|MODELOS DE ROTAS USANDO CONTROLLER
|--------------------------------------------------------------------------
*/


Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobrenos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::post('/contato', 'ContatoController@contato')->name('site.contato');

/*
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');
*/