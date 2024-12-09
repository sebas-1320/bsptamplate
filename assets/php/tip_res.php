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

$Nombre= $_POST["Nombre"];

$i_np = $link->prepare("INSERT INTO tipo_re (Nombre) VALUES (?)");
$i_np->bind_param("s",$Nombre);
if ($i_np->execute()) {
  header('location:../../reservas.php');
} else {  
  echo "Error: " . $i_np->error;
}


?>
</body>
</html>