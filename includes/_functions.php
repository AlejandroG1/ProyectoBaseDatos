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

<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'editar_registroproductos';
        editar_registroproductos();

        break;

        case 'insertar_registroproductos';
        insertar_registroproductos();

        break;
        case 'eliminar_registroproductos';
        eliminar_registroproductos();

        break;

    }

}

function insertar_registroproductos(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO registroproductos (codigo, nombre, descripcion, precio, cantidad, categorias, imagen, password)
    VALUES ('$codigo', '$nombre','$descripción','$precio', '$cantidad', '$categoria', '$password');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/registroproductos/");


}
function editar_registroproductos(){

    global $conexion;
    extract($_POST);

    $consulta="UPDATE registroproductos SET nombre = '$nombre', correo = '$correo', password = '$password', telefono = '$telefono' 
    WHERE id = $id";

   mysqli_query($conexion, $consulta);
    
   header("Location: ../views/registroproductos/");



}



function eliminar_registroproductos(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM registroproductos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/registroproductos/");
}
?>