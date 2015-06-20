<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Controle de Estoque</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
		<script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/bootstrap.min.js') }}"></script>
	</head>
	<body>
		<div class="container">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/home">
						Estoque Laravel
						</a>
					</div>
					
					<ul class="nav navbar-nav">
						<li><a href="{{ url('/home') }}">Home</a></li>
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								Produtos <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ action('ProdutoController@lista') }}">Listagem</a></li>
								<li><a href="{{ action('ProdutoController@novo') }}">Novo</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			
			@yield('conteudo')
			
			<footer class="footer">
				<p>&copy; {{ date('Y') }} Livro de Laravel da Casa do Código.</p>
			</footer>
		</div>
	</body>
</html>