<?php
    require "conexionDB.php";
    $usuario = $_POST["id_usuario"];
    $result = mysqli_query($conexion, "delete from usuarios where id_usuario = '$usuario'");
    mysqli_close($conexion);
    header("Location: ../usuarios.php");
?>