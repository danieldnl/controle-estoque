<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Controle de Estoque</title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="/css/custom.css">
	</head>
	<body>
		<div class="container">
		
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="/produtos">
						Estoque Laravel
						</a>
					</div>
					
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/produtos">Listagem</a></li>
					</ul>
				</div>
			</nav>
			
			@yield('conteudo')
			
			<footer class="footer">
				<p>&copy; Livro de Laravel da Casa do Código.</p>
			</footer>
		</div>
	</body>
</html>