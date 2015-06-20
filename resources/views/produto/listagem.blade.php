@extends('layout.principal')

@section('conteudo')

<h1>Listagem de produtos</h1>
@if(old('nome'))
	<div class="alert alert-success" role="alert">
		<p>
			<strong>Sucesso!</strong>
			O produto {{ old('nome') }} foi salvo com sucesso!
		</p>
	</div>
@endif

@if(empty($produtos))
	<div class="alert alert-danger">
		Você não tem nenhum produto cadastrado.
	</div>
@else
	<div class="panel panel-primary">
		<div class="panel-heading">
			Produtos Cadastrados
		</div>
		<div class="panel-body">
			<div class="text-right">
				<a href="{{ action('ProdutoController@novo') }}" class="btn btn-primary">
					<span class="glyphicon glyphicon-plus-sign"></span>
					Novo Produto
				</a>
			</div>
			<br>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr class="bg-primary">
						<td>Produto</td>
						<td>Valor (R$)</td>
						<td>Descrição</td>
						<td class="text-center">Quantidade</td>
						<td class="text-center" colspan="3">Ações</td>
					</tr>
				</thead>
				<tbody>
					@foreach($produtos as $p)
						<tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
							<td>{{ $p->nome }}</td>
							<td>{{ $p->valor }}</td>
							<td>{{ $p->descricao }}</td>
							<td class="text-center">{{ $p->quantidade }}</td>
							<td class="text-center">
								<a href="{{ action('ProdutoController@mostra', $p->id) }}" data-toggle="tooltip" 
									data-placement="top" title="Exibir">
									<span class="glyphicon glyphicon-search"></span>
								</a>
							</td>
							<td class="text-center">
								<a href="{{ action('ProdutoController@edita', $p->id) }}" data-toggle="tooltip" 
									data-placement="top" title="Editar">
									<span class="glyphicon glyphicon-edit"></span>
								</a>
							</td>
							<td class="text-center">
								<a href="{{ action('ProdutoController@remove', $p->id) }}" data-toggle="tooltip" 
									data-placement="top" title="Remover Produto">
									<span class="glyphicon glyphicon-trash"></span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="panel-footer text-right">
			Total: <strong>{{ count($produtos) }}</strong>
		</div>
	</div>
@endif

<h4>
	<span class="label label-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>

<script type="text/javascript">
	$(document).ready(function () {
		// Inicializar o componente "tooltip"
		$('[data-toggle="tooltip"]').tooltip();
	});			
</script>
@stop