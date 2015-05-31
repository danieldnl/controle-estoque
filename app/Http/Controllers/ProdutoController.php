<?php namespace estoque\Http\Controllers;

// Injeção de dependências do Laravel
use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {
	public function lista()
	{
		$produtos = DB::select('select * from produtos');
		
		//return view('listagem')->with('produtos', $produtos);
		# Método mágico!
		//return view('listagem')->withProdutos($produtos);
		return view('produto.listagem')->withProdutos($produtos);
	}
	
	public function mostra ($id)
	{
		// Verificar se o parâmetro existe
		
		
		// Lista todos os params 
		// $input = Request::all();
		
		// apenas nome e id
		// $input = Request::only('nome', 'id');
		
		// todos os parms, menos o id
		// $input = Request::except('id');
		
		//$id = Request::input('id', '0'); -- Recuperando parâmetro da requisição
		
		// Recuperando parâmetro da rota, caso a mesma não esteja sendo informada como parâmetro do método
		//$id = Request::route('id');
		
		$resposta = DB::select('select * from produtos where id = ?', [$id]);
		
		if (empty($resposta)) {
			return "Esse produto não existe";
		}
		
		return view('produto.detalhes')->with('p', $resposta[0]);
	}
}


