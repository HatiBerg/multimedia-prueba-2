<?php
ob_start();

$nombres = "Esteban Adolfo";
$apellidos = "Ponce Lira";
$rut = "12345678-9";
$fechaNac = "08-06-1990";
$nacionalidad = "Canadience";
$genero = "Hombre";
$cuidadRes = "Valparaiso";

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
    <div id="wrapper">
        <div id="main">
            <div id="containerTop">
                <div id="rowTop1">
                    <div id="foto">
                        <img src="/img/perfil/Hatiderp.png" id="imgPerfil">
                    </div>
                    <div id="info">
                        <div id="infoTop">
                            <?php
                            echo "<b>Esteban Adolfo Ponce Lira</b>";
                            ?>
                        </div>
                        <div id="infoBottom">
                            <?php
                            echo "Rut: " . "20207917-2";
                            ?>
                        </div>
                    </div>
                </div>
                <div id="rowTop2">
                    <?php
                    echo "Datos varios:";
                    echo "<br>● <b>Fecha de Nacimiento: </b>" . $fechaNac;
                    echo "<br>● <b>Nacionalidad: </b>" . $nacionalidad;
                    echo "<br>● <b>Genero: </b>" . $genero;
                    echo "<br>● <b>Ciudad residencia: </b>" . $cuidadRes;
                    ?>
                </div>
                <div id="rowTop3">
                    <?php
                    date_default_timezone_set("America/Santiago");
                    echo "Fecha y hora de emision: " . date("d-m-Y H:i ");

                    if ($nacionalidad == "Chilena") {
                        echo "<img src='img/banderas/chile.png' id='bandera' width='60px' height='40px'>";
                    }
                    if ($nacionalidad == "Canadience") {
                        echo "<img src='img/banderas/canada.png' id='bandera' width='60px' height='40px'>";
                    }
                    if ($nacionalidad == "Uruguaya") {
                        echo "<img src='img/banderas/uruguay.png' id='bandera' width='60px' height='40px'>";
                    }
                    ?>
                </div>
            </div>

            <div id="containerBottom">
                <div id="qrContainer">
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

                    //Declaramos una carpeta temporal para guardar la imágenes generadas
                    $dir = 'img/temp/';

                    //Si no existe la carpeta la crea
                    if (!file_exists($dir)) {
                        mkdir($dir);
                    }

                    //Declaramos la ruta y nombre del archivo a generar
                    $filename = $dir . 'qr.png';

                    //Parámetros de Configuración
                    $tamaño = 5; //Tamaño de Pixel
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
                    echo '<img src="' . $dir . basename($filename) . '"/>';
                    ?>
                </div>

                <div id="dateContainer">
                    <?php
                    date_default_timezone_set("America/Santiago");
                    echo "Fecha y hora de emision: " . date("d-m-Y H:i");
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    
    $html = ob_get_clean();

    //lib
    require_once 'lib/dompdf/autoload.inc.php';

    // reference the Dompdf namespace
    use Dompdf\Dompdf;
    use Dompdf\Options;

    // instantiate and use the dompdf class
    $options = new Options();
    $options->set('isRemoteEnabled', TRUE);
    $dompdf = new DOMPDF($options);

    // Load PDF
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('letter');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream("Esteban Adolfo Ponce Lira.pdf", array("Attachment" => false));
    
    ?>

</body>

</html>