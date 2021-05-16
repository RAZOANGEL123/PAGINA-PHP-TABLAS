<?php
//Conectamos con el servidor
$conectar=mysqli_connect('localhost','root','');
//Verificamos la conexion
if(!$conectar){
    echo"ERROR DE CONEXION CON EL SERVIDOR";
}else{
    $base=mysqli_select_db($conectar,'prueba');
    if(!$base){
        echo"NO HAY BASE DE DATOS";
    }
}

$NOMBRE=$_POST['NOMBRE'];
$EMAIL=$_POST['EMAIL'];
$PASWORD=$_POST['PASWORD'];


$sql="INSERT INTO tabla VALUES('$NOMBRE','$EMAIL','$PASWORD')";

$ejecutar=mysqli_query($conectar,$sql);


if(!$ejecutar){

    echo"ERROR EN GUARDAR";

}else{

    echo"DATOS GUARDADOS<br><a href='index.php'>REGRESAR AL REGISTRO</a>";
    
} 

?>