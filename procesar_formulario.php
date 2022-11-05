<?php

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$rut = $_POST['rut'];
$fechaNac = $_POST['FechaDeNacimiento'];
$nacionalidad = $_POST['nacionalidad'];
$genero = $_POST['genero'];
$cuidadRes = $_POST['CiudadRes'];
$imagen = $_FILES['foto'];
$estado = 1; // estado de subida de la noticia
$img_error="";

$nombre_archivo = "imagen";
$target_dir = "img/";
$target_file = $target_dir . $nombre_archivo . '.jpg';
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($imagen["tmp_name"]);