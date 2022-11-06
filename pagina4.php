<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_prueba_2";

$conexion = mysqli_connect($host, $user, $pass, $db);

$consultaPais = "SELECT nacionalidad, count(id) AS cantidad FROM formulario GROUP BY nacionalidad";
$contPais = mysqli_query($conexion, $consultaPais);

$consultaEdad = "SELECT TIMESTAMPDIFF(YEAR,fecha_nac,CURDATE()) AS Edad, count(id) AS cantEdad
FROM formulario 
GROUP BY TIMESTAMPDIFF(YEAR,fecha_nac,CURDATE())";
$contEdad = mysqli_query($conexion, $consultaEdad);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 4</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Nacionalidad', 'Cantidad'],
                <?php
                while ($row = mysqli_fetch_array($contPais)) {
                    echo "['" . $row["nacionalidad"] . "', " . $row["cantidad"] . "],";
                }
                ?>
            ]);

            var optionsData = {
                title: 'Cantidad de personas registradas por país',
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, optionsData);
        }
    </script>
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

    <main class="container-fluid justify-content-center my-5 text-center">
        <div class="d-flex">
            <div class="col-12 bg-light mb-5">
                <div class="mx-auto" id="piechart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-12 bg-light">
            </div>
        </div>
    </main>

    <footer class="container-fluid justify-content-center">
        <div class="text-center p-4" style="background-color: white;">
            Tecnología Multimedia - CIF 6459 - Domingo 06/11/2022 - Esteban Ponce - Sebastian Torres
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>