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
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
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
                <h1>
                    <div class="text-center">Formulario</div>
                        <form class="mx-5 needs-validation">
                            <div class="mb-3">
                                <label for="Nombre" class="form-label fs-4">Nombres</label>
                                <input type="text" class="form-control" id="nombres" aria-describedby="AyudaNombre" required>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su nombre
                                </div>
                            <div id="AyudaNombre" class="form-text"></div>

                            <div class="mb-3">
                                <label for="Apellidos" class="form-label fs-4">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" aria-describedby="AyudaApellido" required>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su apellido
                                </div>
                            <div id="AyudaApellido" class="form-text"></div>

                            <div class="mb-3">
                                <label for="Rut" class="form-label fs-4">RUT</label>
                                <input type="text" class="form-control" id="rut" aria-describedby="AyudaRut" required>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su RUT
                                </div>
                            <div id="AyudaRut" class="form-text"></div>

                            <div class="mb-3">
                                <label for="FechaDeNacimiento" class="form-label fs-4">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="FechaDeNacimiento" aria-describedby="AyudaNacim" required>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su fecha de nacimiento
                                </div>
                            <div id="AyudaNacim" class="form-text"></div>

                            <div class="mt-3">
                                <label for="Nacionalidad" class="form-label fs-4">Nacionalidad</label>
                                <select class="form-select" id="nacionalidad" required>
                                    <option selected disabled value="">Seleccione nacionalidad</option>
                                    <option value="">Chilena</option>
                                    <option value="">Canadience</option>
                                    <option value="">Uruguaya</option>
                                </select>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su nacionalidad
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="Genero" class="form-label fs-4">Genero</label>
                                <select class="form-select" id="genero" required>
                                    <option selected disabled>Seleccione genero</option>
                                    <option value="1">Hombre</option>
                                    <option value="2">Mujer</option>
                                    <option value="3">Otros</option>
                                </select>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su genero
                                </div>
                            </div>

                            <div class="mt-3">
                                <label for="CiudadRes" class="form-label fs-4">Ciudad de residencia</label>
                                <input type="text" class="form-control" id="CiudadRes" required>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su cuidad de residencia
                                </div>
                            <div id="AyudaCiudad" class="form-text"></div>

                            <div class="my-3">
                                <label for="formFile" class="form-label fs-4">Subir foto</label>
                                <input class="form-control" type="file" id="foto" required>
                                <div class="invalid-feedback">
                                    Es necesario ingresar su foto de perfil
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </h1>
            </div>
            <div class="col-4 bg-light border-start border-5">
                <h1>
                    hola
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