<?php

//Controllers
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FornecedorController;

/*/
Route::get('/', function () {
    return "Olá mundo";
});
/*/

//Naming routes
Route::get('/', [PrincipalController::class, 'principal'])->name('site.principal');


Route::get('/sobre', [SobreController::class, 'sobre'])->name('site.sobre');

Route::get('/contato', [ContatoController::class,'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class,'contato'])->name('site.contato');


Route::get('/contato/{nome?}/{idade?}', function(string $nome = "Não informado", int $idade = 0) {
    return "Olá $nome , com idade de : $idade anos";   
})-> where('idade', '[0-9]+')->where('nome', '[A-Za-z]+')->name('site.login');

Route::get('/login', function() {
    return "Login";
});

//Agroupment of routes
Route::prefix('/app')->group(function() {
    Route::get('/clientes', function() {
        return "Clientes";
    });
    
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    
    Route::get('/produtos', function() {
        return "Produtos";
    });

});

Route::get('/teste/{p1}/{p2}', [TesteController::class , 'teste'])->name('teste');


//We can redirect like this too

//Route::redirect('/rota2', '/rota1');

//Fallback routes

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href = "'.route('site.principal').'">Clique aqui</a> para voltar ao início';
});