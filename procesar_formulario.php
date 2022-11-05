<?php

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$rut = $_POST['rut'];
$fechaNac = $_POST['fechaNac'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$cuidadRes = $_POST['ciudadRes'];
$imagen = $_FILES['foto'];
$estado = 1; // estado de subida del formulario | Estados posibles ==> 0 = Error / 1 = Subir formulario

$nombre_archivo = $_FILES['foto']['name'];
$target_dir = "img/perfil/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check = getimagesize($imagen["tmp_name"]);

//Verifica que sea una imagen
if ($check == false)
    $estado = 0;

//Verificar que solo sean archivos .jpg .png .jpng
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $estado = 0;
}

//Verifica el tamaño máximo de la imagen sea 1MB (1mb = 1048576 bytes)
if ($imagen["size"] > 1048576) {
    $estado = 0;
}

//Estado de subida del archivo
if ($estado == 1) {
    move_uploaded_file($imagen["tmp_name"], $target_file);

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "bd_prueba_2";

    $conexion = mysqli_connect($host, $user, $pass, $db);

    $consulta = "INSERT INTO formulario (nombres, apellidos, rut, fecha_nac, nacionalidad, genero, cuidad_res, url_foto) 
            VALUES('$nombres', '$apellidos', '$rut', '$fechaNac', '$nacionalidad', '$genero', '$cuidadRes', '$imagen')";

    if (mysqli_query($conexion, $consulta)) {
        echo "El formulario se a subido con exito";
        echo "<br>";
    } else {
        echo "Error al subir el formulario";
        echo "<br>";
    }
} else {
    echo "Error al subir el formulario";
}
