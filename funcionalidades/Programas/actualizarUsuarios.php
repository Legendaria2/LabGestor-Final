<?php
require "conexionDB.php";

$id_usuario = $_POST['id'];
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
    header('Location: formularioActualizarUsuarios.php');
    echo "<script>
            alert('La contraseña no coincide con la confirmacion de la contraseña')
        </script>";
} else {

    if (isset($id_usuario) || $id_usuario !== '') {

        $sql = "update usuarios set nombre_usuario='$nombre_usuario', primer_nombre='$primer_nombre', segundo_nombre='$segundo_nombre', primer_apellido='$primer_apellido', segundo_apellido='$segundo_apellido', contraseña_usuario='$password', rol_usuario='$rol_usuario', estado='$estado_actividad' where id_usuario='$id_usuario'";

        mysqli_query($conexion, $sql);
        header("Location: ../usuarios.php");
    } else {
        header('Location: formularioActualizarUsuarios.php');
    }
}
