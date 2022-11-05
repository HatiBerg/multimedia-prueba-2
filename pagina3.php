<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
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

    <main class="container-fluid justify-content-center my-5 text-center">
        <div class="d-flex bg-light">
            <div class="col-12 bg-light">
                <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "bd_prueba_2";

                $conexion = mysqli_connect($host, $user, $pass, $db);
                $consulta = "SELECT * FROM formulario";
                $resultado = mysqli_query($conexion, $consulta);

                while ($mostrar = mysqli_fetch_array($resultado))
                ?>
                <img src="img/perfil/Hatiderp.png" class="rounded float-start img-thumbnail" style="width:200px; height:200px">
                
                <div class="col-4 bg-light border-start border-5">
                <h4>
                    Datos
                </h4>
                
                <div class="d-flex flex-row mt-5">
                <td><button type="button" class="btn btn-danger">Generar PDF</button></td>
                </div>
            </div>
        </div>
    </main>
   
    <footer class="container-fluid justify-content-center text-center text-lg-start">
        <div class="text-center p-4" style="background-color: white;">
            Tecnología Multimedia - CIF 6459 - Domingo 06/11/2022 - Esteban Ponce - Sebastian Torres
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>