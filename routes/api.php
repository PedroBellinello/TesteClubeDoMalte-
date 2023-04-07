<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/produtos', function (Request $request) {
        $produto = new Produto([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
            'avaliacao' => $request->avaliacao
        ]);
        $produto->save();
        return response()->json($produto, 201);
    });

    Route::get('/produtos', function () {
        $produtos = Produto::all();
        return response()->json($produtos);
    });

    Route::get('/produtos/{id}', function ($id) {
        $produto = Produto::find($id);
        return response()->json($produto);
    });

    Route::put('/produtos/{id}', function (Request $request, $id) {
        $produto = Produto::find($id);
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->avaliacao = $request->avaliacao;
        $produto->save();
        return response()->json($produto);
    });

    Route::delete('/produtos/{id}', function ($id) {
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json(['message' => 'Produto excluído com sucesso']);
    });
});

