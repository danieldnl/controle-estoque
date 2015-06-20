@extends('layout.principal')

@section('conteudo')

<h1>Detalhes do produto: {{ $p->nome }}</h1>
<ul class="nav">
	<li>
		<b>Valor: </b> R$ {{ $p->valor }}
	</li>
	<li>
		<b>Descrição: </b> {{ $p->descricao }}
	</li>
	<li>
		<b>Quantidade em estoque: </b> {{ $p->quantidade }}
	</li>
</ul>

<hr>
<a href="{{ action('ProdutoController@lista') }}" class="btn btn-primary">
	<span class="glyphicon glyphicon-chevron-left"></span> Voltar
</a>

@stop