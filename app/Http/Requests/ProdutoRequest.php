<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nome' => 'required|min:5',
			'descricao' => 'required|max:255',
			'valor' => 'required|numeric',
			'quantidade' => 'required|numeric|min:1'
		];
	}
	
	public function messages()
	{
		return [
			'nome.required' => 'O campo Nome não pode ser vazio.',
			'nome.min' => 'O campo Nome deve ter 5 caracteres ou mais.',
			'descricao.required' => 'O campo Descrição não pode ser vazio.',
			'descricao.max' => 'O campo Descrição pode ter no máximo 255 caracteres.',
			'valor.required' => 'O campo Valor não pode ser vazio.',
			'valor.numeric' => 'O campo Valor deve ser numérico.',
			'quantidade.required' => 'O campo Quantidade não pode ser vazio.',
			'quantidade.numeric' => 'O campo Quantidade deve ser numérico.',
			'quantidade.min' => 'A quantidade mínima permitida é de um item.'
		];
	}

}
