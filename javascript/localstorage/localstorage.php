<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalStorage</title>
</head>
<body>
    <script>
       // Comprobamos que el navegador soporte Local Storage
		 if (typeof(Storage) !== "undefined"){
			// document.write('Si soporta');

		// 	// Establecemos un nuevo valor
             localStorage.setItem('nombre', 'Carlos Arturo');
        //     localStorage.nombre = 'DileoWeb';
		 } else {
		 	document.write('Tu navegador no soporta Web Sotorage');
		 }

// ----- ----- ----- -----

		// Llamamos al nombre guardado en localStorage
		// document.write(localStorage.nombre);

		// Eliminamos el elemento de localStorage
		// localStorage.removeItem('nombre');

// ----- ----- ----- ----- Session Storage
// Con Session Storage la informacion es borrada cuando se cierra la pestaña
		// sessionStorage.nombre = 'Carlos';
		document.write(sessionStorage.nombre);
    </script>
</body>
</html>