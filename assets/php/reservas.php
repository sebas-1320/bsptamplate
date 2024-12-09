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

$Fecha_Hora= $_POST["Fecha_Hora"];
$NID= $_POST["NID"];
$Tipo_reserva= $_POST["Tipo_reserva"];
$Cantidad_personas=$_POST["Cantidad_personas"];
$Mesa_asignada=$_POST["Mesa_asignada"];
$Observacion=$_POST["Observacion"];

$i_np = $link->prepare("INSERT INTO reservas (Fecha_Hora,NID,Tipo_reserva,Cantidad_personas,Mesa_asignada,Observacion) VALUES (?,?,?,?,?,?)");
$i_np->bind_param("iiiiis",$Fecha_Hora,$NID,$Tipo_reserva,$Cantidad_personas,$Mesa_asignada,$Observacion);
if ($i_np->execute()) {
  header('location:../../reservas.php');
} else {  
  echo "Error: " . $i_np->error;
}


?>
</body>
</html>