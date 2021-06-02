<?php

require_once '_db.php';

function insertar_usuarios(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO usuarios (nombre, correo, telefono, password)
    VALUES ('$nombre', '$correo', '$telefono', '$password');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");


}

insertar_usuarios();

?>