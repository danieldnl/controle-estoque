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
	<table class="table table-striped table-bordered table-hover">
		<tbody>
			@foreach($produtos as $p)
				<tr class="{{ $p->quantidade <= 1 ? 'danger' : ''}}">
					<td>{{ $p->nome }}</td>
					<td>{{ $p->valor }}</td>
					<td>{{ $p->descricao }}</td>
					<td class="text-center">{{ $p->quantidade }}</td>
					<td class="text-center">
						<a href="{{ action('ProdutoController@mostra', $p->id) }}">
							<span class="glyphicon glyphicon-search"></span>
						</a>
					</td>
					<td class="text-center">
						<a href="{{ action('ProdutoController@edita', $p->id) }}">
							<span class="glyphicon glyphicon-edit"></span>
						</a>
					</td>
					<td class="text-center">
						<a href="{{ action('ProdutoController@remove', $p->id) }}">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endif

<h4>
	<span class="label label-danger pull-right">
		Um ou menos itens no estoque
	</span>
</h4>

@stop