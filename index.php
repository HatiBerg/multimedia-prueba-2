<!--Crear un sitio web que permita mediante un formulario ingresar los datos de una persona a la base de datos, 
se debe poder ver todas las personas registradas en una sola tabla, además debe permitir ver el perfil de cada
persona y con esa información generar un documento de pasaporte en formato en PDF. Debe haber una página de 
estadísticas que indique algunas estadísticas. Detalle en imágenes adjuntas.

La página debe realizarse con bootstrap como librería de diseño CSS.

El formulario de ingreso debe contener los siguientes campos:
Nombres
Apellidos
Rut
Fecha de nacimiento
Nacionalidad (chilena, canadiense y uruguaya) (debe desplegarse con un select)
Genero
Ciudad residencia
Foto
Al generar el pasaporte en PDF no es necesario utilizar Bootstrap, es probable que no funcione bien, utilice CSS puro.
La nacionalidad debe ser mostrada de dos formas, en forma de texto con el resto de datos y como una imágen, 
que debe cambiar dependiendo de la nacionalidad elegida.-->
<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:82/multimedia-prueba-2/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <main>
    <form action="insertarDb.php" method="post" enctype="multipart/form-data">
            <label for="Nombres">Nombres </label>
        <input type="text" name="Nombres" id="Nombres">
        <br><br>
        <label for="Apellidos">Apellidos </label>
        <input type="text" name="Apellidos" id="Apellidos" required>
        <br><br>
        <label for="Rut">Rut </label>
        <input type="text" name="Rut" id="Rut" required>
        <br><br>
        <label for="FechaDeNacimiento">Fecha de nacimiento </label>
        <input type="text" name="FechaDeNacimiento" id="FechaDeNacimiento" required>
        <br><br>
        <label for="Nacionalidad">Nacionalidad </label>
        <input type="text" name="Nacionalidad" id="Nacionalidad" required>
        <br><br>
        <label for="Genero">Genero </label>
        <input type="text" name="Genero" id="Genero" required>
        <br><br>
        <label for="CiudadDeResidencia">Ciudad de recidencia </label>
        <input type="text" name="CiudadDeResidencia" id="CiudadDeResidencia" required>
        <br><br>
        <label>Foto</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br><br>
        <input type="submit" value="enviar fomulario">
        <br></br>
            </form>
    </main>
</body>
</html>