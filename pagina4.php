<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 4</title>
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

    <main class="container-fluid justify-content-center my-5 text-center">
        <div class="d-flex">
            <div class="col-12 bg-light mb-5">
            <?php
                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "bd_prueba_2";

                $conexion = mysqli_connect($host, $user, $pass, $db);
                $consulta = "SELECT * FROM formulario";
                $resultado = mysqli_query($conexion, $consulta);

                while ($mostrar = mysqli_fetch_array($resultado))

                echo $mostrar['nacionalidad']

                //$Chilena = $_POST['nacionalidad']
                
                
                /*if ($Chilena==1) {
                echo "";
                } elseif ($Chilena+1) {
                     echo "";
                } else {
                 echo "";
                }*/
                ?>
               
                               
                            
                         
            <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Nacionalidad');
        data.addColumn('number', 'Cantidad');
        data.addRows([
          ['Chilena', 3],
          ['Canadience', 1],
          ['Uruguaya', 1],
         
        ]);

        // Set chart options
        var options = {'title':'Nacionalidad personas',
                       'width':600,
                       'height':400};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
                <h1>hola</h1>
            </div>
        </div>
        <div class="d-flex">
            <div class="col-12 bg-light">
                <h1>hola</h1>
            </div>
        </div>
        <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
        ["Entre 18 y 40", 8.94, "#b87333"],
        ["Entre 41 y 60", 10.49, "silver"],
        ["Entre 60 y 80", 19.30, "gold"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Edad de las personas inscritas",
        width: 400,
        height: 300,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 900px; height: 300px;"></div>
    </main>
      
    <footer class="container-fluid justify-content-center">
        <div class="text-center p-4" style="background-color: white;">
            Tecnología Multimedia - CIF 6459 - Domingo 06/11/2022 - Esteban Ponce - Sebastian Torres
        </div>
    </footer>

    <script src="js/bootstrap.js"></script>
</body>

</html>