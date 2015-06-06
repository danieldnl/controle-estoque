@extends('layout.principal')

@section('conteudo')
<div class="alert alert-success" role="alert">
	<p>
		<span class="glyphicon glyphicon-ok"></span>
		<strong>Sucesso!</strong>
		O produto {{ $nome }} foi adicionado com sucesso!
	</p>
</div>
<p class="text-center">
	<a href="/produtos" class="btn btn-primary">OK</a>
</p>

@stop