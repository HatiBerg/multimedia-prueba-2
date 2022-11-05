
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
    <header>

    </header>
    <main>
    <form>
  <div class="mb-3">
    <label for="Nombre" class="form-label">Nombres</label>
    <input type="name" class="form-control" id="Nombre" aria-describedby="AyudaNombre" required>
    <div id="AyudaNombre" class="form-text"></div>
  
    <div class="mb-3">
    <label for="Apellidos" class="form-label">Apellidos</label>
    <input type="name" class="form-control" id="Apellidos" aria-describedby="AyudaApellido" required>
    <div id="AyudaApellido" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="Rut" class="form-label">Rut</label>
    <input type="name" class="form-control" id="Rut" aria-describedby="AyudaRut" required>
    <div id="AyudaRut" class="form-text"></div>

    <div class="mb-3">
    <label for="FechaDeNacimiento" class="form-label">Fecha de nacimiento</label>
    <input type="name" class="form-control" id="FechaDeNacimiento" aria-describedby="AyudaNacim" required>
    <div id="AyudaNacim" class="form-text"></div>

    <div class="mt-3">
    <select class="form-select" aria-label="Default select example">
  <option selected>Seleccione nacionalidad</option>
  <option value="1">Chilena</option>
  <option value="2">Canadience</option>
  <option value="3">Uruguaya</option>
</select>

    <div class="mt-3">
    <label for="Genero" class="form-label">Genero</label>
    <input type="name" class="form-control" id="Genero" aria-describedby="AyudaGenero" required>
    <div id="AyudaGenero" class="form-text"></div>

    <div class="mt-3">
    <label for="CiudadRes" class="form-label">Ciudad de residencia</label>
    <input type="name" class="form-control" id="CiudadRes"  required>
    <div id="AyudaCiudad" class="form-text"></div>

    <div class="mt-3">
  <label for="formFile" class="form-label">Subir foto</label>
  <input class="form-control" type="file" id="formFile">
</div>
    
  <button type="Enviar" class="btn btn-primary">Enviar</button>
</form>
    </main>
    <footer>

    </footer>
</body>
</html>