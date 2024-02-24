<?php

include_once 'conexion.php';

$ID_ADMIN=$_POST['ID_ADMIN'];

$NOMBRES=$_POST['Nombre'];

$APELLIDOS=$_POST['Apellidos'];

$USUARIO_ADMIN=$_POST['USUARIO_ADMIN'];

$CORREO=$_POST['correo'];

$EDAD=$_POST['EDAD_ADMIN'];

$TELEFONO=$_POST['telefono'];

$DIRECCION=$_POST['direccion'];

$PASSWORD=$_POST['password'];

$PASSWORD1=$_POST['repPassword'];
$consulta_existencia = "SELECT * FROM admin WHERE ID_ADMIN = '$ID_ADMIN'";
$resultado_existencia = mysqli_query($conectar, $consulta_existencia);

if (mysqli_num_rows($resultado_existencia) > 0) {
    echo "El ID_ADMIN ya está registrado.";
} else {
    // Si las contraseñas coinciden, procedemos a insertar el nuevo registro
    if ($PASSWORD == $PASSWORD1) {
        $insertar = "INSERT INTO `admin`(`ID_ADMIN`, `Nombre`, `Apellidos`, `USUARIO_ADMIN`, `correo`, `EDAD_ADMIN`, `telefono`, `direccion`, `password`, `repPassword`) 
            VALUES ('$ID_ADMIN','$NOMBRES','$APELLIDOS','$USUARIO_ADMIN','$CORREO','$EDAD','$TELEFONO','$DIRECCION','$PASSWORD','$PASSWORD1')";

        $ejecutarsql = mysqli_query($conectar, $insertar);

        if (!$ejecutarsql) {
            echo "NO SE PUDO INSERTAR EL USUARIO A LA BASE DE DATOS";
        } else {
            echo "SE HA INSERTADO EL USUARIO A LA BASE DE DATOS";
        }
    } else {
        echo "LAS CONTRASEÑAS SON DIFERENTES";
    }
}

mysqli_close($conectar);
?>