<?php namespace estoque\Http\Controllers;

// Injeção de dependências do Laravel
use Illuminate\Support\Facades\DB;
use Validator;
use Request;
use estoque\Produto;
use estoque\estoque;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

	public function __construct()
	{
		/* $this->middleware('auth', array('only', 
				array('adiciona', 'edita', 'remove'))); */
	}
	
	public function lista()
	{
		$produtos = Produto::all();

		return view('produto.listagem')->with('produtos', $produtos);
	}
	
	public function listaJson ()
	{
		$produtos = Produto::all();
		
		return response()->json($produtos);
	}
	
	public function mostra ($id)
	{
		$produto = Produto::find($id);
		
		if (empty($produto)) {
			return "Esse produto não existe";
		}
		
		return view('produto.detalhes')->with('p', $produto);
	}
	
	public function novo ()
	{
		return view('produto.formulario');
	}
	
	public function adiciona (ProdutoRequest $request)
	{
		Produto::create($request->all());
	
		return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
	}
	
	public function edita($id)
	{
		$produto = Produto::find($id);
		
		if (empty($produto)) {
			return "Produto não encontrado.";
		}
		
		return view('produto.formulario')->with('p', $produto);
	}
	
	public function altera (ProdutoRequest $request)
	{
		$produto = Produto::find($request->input('id'));
		$produto->nome = $request->input('nome');
		$produto->descricao = $request->input('descricao');
		$produto->valor = $request->input('valor');
		$produto->quantidade = $request->input('quantidade');
		
		$produto->save();
		
		return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
	}
	
	
	public function remove ($id) 
	{
		$produto = Produto::find($id);
		$produto->delete();
		
		return redirect()->action('ProdutoController@lista');
	}

}