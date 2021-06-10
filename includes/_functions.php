<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'editar_usuario';
        editar_usuario();

        break;

        case 'insertar_usuarios';
        insertar_usuarios();

        break;
        case 'eliminar_usuarios';
        eliminar_usuario();

        break;

    }

}

function insertar_usuarios(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO usuarios (nombre, correo, telefono, password)
    VALUES ('$nombre', '$correo', '$telefono', '$password');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");


}
function editar_usuario(){

    global $conexion;
    extract($_POST);

    $consulta="UPDATE usuarios SET nombre = '$nombre', correo = '$correo', password = '$password', telefono = '$telefono' 
    WHERE id = $id";

   mysqli_query($conexion, $consulta);
    
   header("Location: ../views/usuarios/");



}



function eliminar_usuario(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM usuarios WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}
?>