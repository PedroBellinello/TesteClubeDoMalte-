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

use App\Models\Produto;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//rota de criação do produto
Route::post('/cadastrar-produto', function (Request $request) {
    //criando produto no banco de dados
     Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
        'avaliacao' => $request->avaliacao
     ]);
     echo "Produto criado com sucesso";
});

//rota de leitura do produto
Route::get('/ver-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('view', ['produto' => $produto]);
});

//rota de update de produto
Route::get('/editar-produto/{id}', function ($id) {
    $produto = Produto::find($id);
    return view('edit', ['produto' => $produto]);
});

//rota para edicao do produto
Route::post('/editar-produto/{id}', function (Request $request, $id) {

    $produto = Produto::find($id);
    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
        'avaliacao' => $request->avaliacao
    ]);
     echo "Produto editado com sucesso";
    // retorna para a pagina de cadastro

    //return redirect('/');
});


//rota de exclusao de produto
Route::get('/excluir-produto/{id}', function ($id) {
    //encontrando produto no banco de dados
    $produto = Produto::find($id);
    $produto->delete();

     echo "Produto excluido com sucesso";

    // retorna para a pagina de cadastro
   //  return redirect('/');

});


Route::resource('produtos', 'App\Http\Controllers\ProdutoController');

