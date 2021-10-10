<?php
$servidor="localhost";
$usuario="root";
$clave="";
$baseDeDatos="registro";
//mysql_select_db("usuario",$db);//

$enlace= mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    echo"Error en la conexion con el servidor";
}
?>

<?php
if (isset($_POST["registrarse"])) {
    $Nombre=$_POST["nom"];
    $Apellidos=$_POST["apell"];
    $Correo=$_POST["mail"];
    $Contraseña=$_POST["pass"];
    $id=rand(1,99);

    $insertarDatos="INSERT INTO datos VALUES('$Nombre', 
                                                                            '$Apellidos', 
                                                                            '$Correo',
                                                                            '$Contraseña',  
                                                                            '$id')";

    $ejecutarInsertar=mysqli_query($enlace, $insertarDatos);

    if (!$ejecutarInsertar) {
        echo"Error en la linea de sql";
    }
}
?>
