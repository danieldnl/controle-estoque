<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Request;
use Auth;

class LoginController extends Controller {

	public function login()
	{
		$credenciais = Request::only('email', 'password');
		
		if (Auth::attempt($credenciais)) {
			return "Usuário " . Auth::getUser()->name . " logado com sucesso!";
		}
		
		return "As credenciais não são válidas!";
	}

}
