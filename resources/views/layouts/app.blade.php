<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Tareas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color:LightGoldenrodYellow;">
    	<div class="container">
		
			@yield('head')
		
			@yield('content') <!-- Aquí se cargará el contenido de las vistas que extiendan este layout -->
    	</div>
</body>
</html>
