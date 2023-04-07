<?php


namespace App\Http\Controllers;

require_once 'produtos.index.php';

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();
        return view('produtos.index', compact('produtos')); // Retorna a view com os dados obtidos
    }

    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
            'avaliacao' => $request->avaliacao
        ]); // Cria um novo produto no banco de dados
        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso'); // Redireciona para a listagem de produtos
    }

    public function show($id)
    {
        $produto = Produto::find($id); // Obtém o produto com o ID especificado
        return view('produtos.show', compact('produto')); // Retorna a view com os dados do produto
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto')); // Retorna a view para editar o produto
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'estoque' => $request->estoque,
            'avaliacao' => $request->avaliacao
        ]); // Atualiza o produto no banco de dados
        return redirect()->route('produtos.index')->with('success', 'Produto editado com sucesso'); // Redireciona para a listagem de produtos
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete(); // Exclui o produto do banco de dados
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso'); // Redireciona para a listagem de produtos
    }
}
