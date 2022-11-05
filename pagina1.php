<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-secondary bg-opacity-25">
    <header class="container-fluid justify-content-center mt-3">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <a class="navbar-brand" href="#">Menú de Navegación:</a>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagina1.php">Ingresar Persona</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagina2.php">Lista Personas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagina4.php">Estadísticas</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container-fluid justify-content-center my-5">
        <div class="d-flex">
            <div class="col-8 bg-light border-end border-5">
                <form class="mx-5 mt-4 needs-validation novalidate" action="procesar_formulario.php" method="POST" enctype="multipart/form-data">
                    <div class="fs-1 mb-4 text-center">Formulario</div>
                    <div class="row mb-4">
                        <label for="nombre" class="col-2 col-form-label">Nombres</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="apellidos" class="col-2 col-form-label">Apellidos</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba sus apellidos" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="rut" class="col-2 col-form-label">RUT</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="rut" name="rut" placeholder="Ejemplo: 12345678-9 (La K debe estar en mayúsculas)" pattern="\d{3,9}-[\d|K]{1}" required>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="row mb-4">
                        <label for="fechaNac" class="col-2 col-form-label">Fecha de nacimiento</label>
                        <div class="col-10">
                            <input type="date" class="form-control" id="fechaNac" name="fechaNac" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="nacionalidad" class="col-2 col-form-label">Nacionalidad</label>
                        <div class="col-10">
                            <select class="form-select" id="nacionalidad" name="nacionalidad" required>
                                <option selected disabled value="">Seleccione nacionalidad</option>
                                <option value="Chilena">Chilena</option>
                                <option value="Canadience">Canadience</option>
                                <option value="Uruguaya">Uruguaya</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="genero" class="col-2 col-form-label">genero</label>
                        <div class="col-10">
                            <select class="form-select" id="genero" name="genero" required>
                                <option selected disabled value="">Seleccione genero</option>
                                <option value="Hombre">Hombre</option>
                                <option value="Mujer">Mujer</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="ciudadRes" class="col-2 col-form-label">Ciudad de residencia</label>
                        <div class="col-10">
                            <input type="text" class="form-control" id="ciudadRes" name="ciudadRes" placeholder="Escriba su ciudad de residencia" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="foto" class="col-2 form-label">Subir foto</label>
                        <div class="col-10">
                            <input class="form-control" type="file" id="foto" name="foto" required>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mb-4">
                        <button type="submit" class="btn btn-primary btn-lg">Enviar formulario</button>
                    </div>
                </form>
            </div>

            <div class="col-4 bg-light border-start border-5">
                <h1>

                </h1>
            </div>
        </div>
    </main>

    <footer class="container-fluid justify-content-center text-center text-lg-start">
        <div class="text-center p-4" style="background-color: white;">
            Tecnología Multimedia - CIF 6459 - Domingo 06/11/2022 - Esteban Ponce - Sebastian Torres
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>