<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotmularios</title>
</head>
<body>
    <form action="" method="">
        <input type="text" value="Nombre" placeholder="Nombre" maxlength="11" required>
        <br>
        <input type="email" name="correo" id="correo" placeholder="Correo">
        <br>
        <textarea name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
        <br>
        <label for="pais">Paises</label>
        <select name="pais" id="pais">
            <option value="mexico">Mexico</option>
            <option value="italia">Italia</option>
            <option value="venezuela">Venezuela</option>
        </select>
        <br>
        <input type="radio" name="genero" id="hombre" value="hombre"><label for="hombre">Hombre</label>
        <input type="radio" name="genero" id="mujer" value="mujer"><label for="mujer">Mujer</label>
        <br>
        <input type="checkbox" name="terminos" id="terminos"><label for="terminos">Terminos y condiciones</label>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>