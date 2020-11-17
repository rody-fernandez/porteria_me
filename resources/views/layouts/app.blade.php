<html lang="pt-br">
<head>
	<title>Porteria - @yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<section id="info">	
	<div class="conteiner p-5 mt-5">
		<div class="row">
		<div class="col-sm-12">
			@yield('content')
	</div>
	</div>
	</section>
	<footer class="text-center">
		<p class="m-0 text-blue">Mega eletronicos - Porteria</p>
	</footer>
</body>
</html>