<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conexionbd.php';

$NID= $_POST["NID"];
$Nombre= $_POST["Nombre"];
$Telefono= $_POST["Telefono"];
$Correo=$_POST["Correo"];

$i_np = $link->prepare("INSERT INTO cliente (NID,Nombre,Telefono,Correo) VALUES (?,?,?,?)");
$i_np->bind_param("isis",$NID,$Nombre,$Telefono,$Correo);
if ($i_np->execute()) {
  header('location:../../reservas.php');
} else {  
  echo "Error: " . $i_np->error;
}


?>
</body>
</html>