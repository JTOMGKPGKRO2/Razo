<?php

$conexion = mysqli_connect('localhost', 'root', '', 'razo');

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentarios = $_POST['comentarios'];

$sql = "INSERT INTO T_MENSAJES (ME_NOMBRE, ME_CORREO, ME_COMENTARIO) VALUES('$nombre', '$correo', '$comentarios')";

echo mysqli_query($conexion, $sql);
