<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba</title>
</head>
<body>

	<!-- Usando Blade podemos llamar variables de forma mas simple entre {{ ?? }}-->
	<h1>{{ $Texto }}</h1>

	<!-- Tambien podemos usarlos ciclos usando @{Estrutura} -->
	@foreach($Personas as $Persona)
		<li>{{ $Persona }}</li>
	@endforeach
</body>
</html>