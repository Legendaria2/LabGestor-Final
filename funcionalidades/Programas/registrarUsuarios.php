<?php
require 'conexionDB.php';


$id_usuario = $_POST['cedula'];
$nombre_usuario = $_POST['correo'];
$primer_nombre = $_POST['primer-nombre'];
$segundo_nombre = $_POST['segundo-nombre'];
$primer_apellido = $_POST['primer-apellido'];
$segundo_apellido = $_POST['segundo-apellido'];
$password = $_POST['password'];
$password_confirmation = $_POST['password-verify'];
$rol_usuario = $_POST['rol-usuario'];
$estado_actividad = $_POST['estado-actividad'];

if ($password !== $password_confirmation) {
    header('Location: formularioRegistroUsuarios.php');
    echo "<script>
            alert('La contraseña no coincide con la confirmacion de la contraseña')
        </script>";
} else {

    if (isset($id_usuario) || $id_usuario !== '') {

        $sql = "insert into usuarios (id_usuario, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, nombre_usuario, contraseña_usuario, rol_usuario, estado) values ('$id_usuario', '$primer_nombre', '$segundo_nombre', '$primer_apellido', '$segundo_apellido', '$nombre_usuario', '$password', '$rol_usuario', '$estado_actividad')";

        mysqli_query($conexion, $sql);

        header("Location: ../usuarios.php");
    } else {
        header('Location: formularioRegistroUsuarios.php');
    }
}
?>