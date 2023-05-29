<?php
include ("/Desarrollo/laragon/www/SGCC/database/database.php");

if (isset($_POST["btnValidar1"])){
$nombre= $_POST['Nombre'];
$apellido= $_POST["Apellido"];
$cedula= $_POST["Cedula"];
$direccion= $_POST["Direccion"];
$telefono= $_POST["Telefono"];

$consulta =$conexion->query("INSERT INTO beneficiario (NOMBRE, APELLIDO, CI, DIRECCION, TELEFONO) VALUES ('$nombre', '$apellido', '$cedula', '$direccion', '$telefono')");

if ($consulta){
    echo "datos registrados con éxito";
}else{
    echo "error, n ose registraron los datos";
}

}
?>