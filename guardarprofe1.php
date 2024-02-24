<?php
include_once 'conexion.php';

$ID_DOCENTE=$_POST['ID_DOCENTE'];

$NOMBRES=$_POST['Nombre'];

$APELLIDOS=$_POST['Apellidos'];

$USUARIO_ESTU=$_POST['USUARIO_DOCE'];

$CORREO=$_POST['correo'];

$EDAD=$_POST['EDAD_DOCE'];

$TELEFONO=$_POST['telefono'];

$DIRECCION=$_POST['direccion'];

$CARRERA=$_POST['CARRERA'];

$SEMESTRE=$_POST['semestre'];

$PASSWORD=$_POST['password'];

$PASSWORD1=$_POST['repPassword'];

$consulta_existencia = "SELECT * FROM estudiantes WHERE ID_ESTUDIANTE = '$ID_DOCENTE'";

$resultado_existencia = mysqli_query($conectar, $consulta_existencia);

if (mysqli_num_rows($resultado_existencia) > 0) {
    echo "El ID_ESTUDIANTE ya está registrado.";
} else {
    // Si las contraseñas coinciden, procedemos a insertar el nuevo registro
    if ($PASSWORD == $PASSWORD1) {
        $insertarUsuario = "INSERT INTO `estudiantes`(`ID_ESTUDIANTE`, `NOMBRE_ESTUDIANTE`, `APELLIDO_ESTUDIANTE`, `USUARIO`, `CORREO_ESTU`, `EDAD_ESTU`, `CELULAR_ESTU`, `DIRECCION_ESTU`, `PASSWORD_ESTU`, `CARRERA`) 
            VALUES ('$ID_DOCENTE','$NOMBRES','$APELLIDOS','$USUARIO_ESTU','$CORREO','$EDAD','$TELEFONO','$DIRECCION','$PASSWORD','$CARRERA')";

        $ejecutarsql = mysqli_query($conectar, $insertarUsuario);

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