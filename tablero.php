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
<body class="inicial">
  <h1 class="title">MTG MEMORY</h1>
  <div class="contenedor center">
    <form action="juego.php" method="post">
      <input name="nombre" placeholder="Nombre: "></br></br>
      <input name="filas" placeholder="Numero de Filas: "/></br></br>
      <input name="columns" placeholder="Numero de Columnas: "/></br></br>
      <input type="Submit" class="start" value="Start Game  "/>
      <a href="ranking.php" class="rank">Ranquing</a>
    </form>
  </div>
</body>
</html>
