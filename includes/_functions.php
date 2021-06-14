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
        case 'editar_producto';
        editar_producto();

        break;

        case 'insertar_productos';
        insertar_productos();

        break;

        case 'eliminar_productos';
        eliminar_producto();

        break;        

    }

}

function insertar_productos(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO productos (codigo, nombre, descripcion, color, precio, cantidad, categorias, imagen)
    VALUES ('$codigo', '$nombre', '$descripcion', '$color', '$precio', '$cantidad', '$categorias', '$imagen');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/usuarios/");


}



function editar_producto(){

    global $conexion;
    extract($_POST);

    $consulta="UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', color = '$color', precio = '$precio', cantidad = '$cantidad', categorias = '$categorias'
    WHERE codigo = $codigo";

   mysqli_query($conexion, $consulta);
    
   header("Location: ../views/usuarios");
}



function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['codigo'];
    $consulta = "DELETE FROM productos WHERE codigo = $codigo";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/usuarios/");
}


?>