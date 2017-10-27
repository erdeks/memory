<?php
session_start();
if(!isset($_SESSION["rlocal"]))
  $_SESSION["rlocal"]=array();
$rlocal=$_SESSION["rlocal"];
session_destroy();
session_start();
$_SESSION["rlocal"]=$rlocal;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tablero Memory</title>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
  <form action="juego.php" method="post">
    <input name="nombre" placeholder="Nombre: "></br></br>
    <input name="filas" placeholder="Numero de Filas: "/></br></br>
    <input name="columns" placeholder="Numero de Columnas: "/></br></br>
    <input type="Submit" value="Start Game  "/>
  </form>
</body>
</html>
