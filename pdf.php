<?php
/*require_once 'lib/dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();*/

$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_prueba_2";

$conexion = mysqli_connect($host, $user, $pass, $db);
$consulta = "SELECT * FROM formulario";
$resultado = mysqli_query($conexion, $consulta);

$mostrar = mysqli_fetch_array($resultado)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
    <div class="containerTop">
        <div class="rowTop1">
            <div class="foto">

            </div>
            <div class="info1">

            </div>
        </div>
        <div class="rowTop2">

        </div>
        <div class="rowTop3">
            <?php
            date_default_timezone_set("America/Santiago");
            echo "Fecha y hora de emision: " . date("d-m-Y H:i ");

            if ($mostrar['nacionalidad'] == "Chilena") {
                echo "<img src='img/banderas/chile.png'>";
            }
            if ($mostrar['nacionalidad'] == "Canadience") {
                echo "<img src='img/banderas/canada.png'>";
            }
            if ($mostrar['nacionalidad'] == "Uruguaya") {
                echo "<img src='img/banderas/uruguay.png'>";
            }
            ?>
        </div>
    </div>

    <div class="containerBottom">
        <div class="qr">
            <?php
            //Agregamos la librería para genera códigos QR
            require 'lib/phpqrcode/qrlib.php';

            //Guardamos los datos del formulario en variables
            /*
            $nombres = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $rut = $_POST['rut'];
            $fechaNac = $_POST['fechaNac'];
            $nacionalidad = $_POST['nacionalidad'];
            $genero = $_POST['genero'];
            $cuidadRes = $_POST['ciudadRes'];
            */
            $nombres = "Esteban Adolfo";
            $apellidos = "Ponce Lira";
            $rut = "12345678-9";
            $fechaNac = "08-06-1990";
            $nacionalidad = "Canadience";
            $genero = "Hombre";
            $cuidadRes = "Valparaiso";


            //Declaramos una carpeta temporal para guardar la imágenes generadas
            $dir = 'img/temp/';

            //Si no existe la carpeta la crea
            if (!file_exists($dir)) {
                mkdir($dir);
            }

            //Declaramos la ruta y nombre del archivo a generar
            $filename = $dir . 'qr.png';

            //Parámetros de Configuración
            $tamaño = 10; //Tamaño de Pixel
            $level = 'L'; //Precisión Baja
            $framSize = 3; //Tamaño en blanco                                           
            $contenido = "Nombre Completo: " . $nombres . " " . $apellidos .      //contenido del qr
                "\nRUT: " . $rut .
                "\nFecha de Nacimiento: " . $fechaNac .
                "\nNacionalidad: "  . $nacionalidad .
                "\nGenero: " . $genero .
                "\nCuidad de Residencia: " . $cuidadRes;

            //Enviamos los parámetros a la Función para generar código QR 
            QRcode::png($contenido, $filename, $level, $tamaño, $framSize);

            //Mostramos la imagen generada
            echo '<img src="' . $dir . basename($filename) . '" />';
            ?>
        </div>
    </div>
    <div class="dateContainer">
        <?php
        date_default_timezone_set("America/Santiago");
        echo "Fecha y hora de emision: " . date("d-m-Y H:i");
        ?>
    </div>
    </div>
</body>

</html>