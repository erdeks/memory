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
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <title>Ranquing</title>
</head>
<body class="ranquing">
  <?php
    $fichero = fopen("puntuaciones.txt", "r");

    $contenido = array();
    while (!feof($fichero)){
      $linea = fgets($fichero);
      if(!empty($linea)){
        $pos = strpos($linea, ",");
        $jugador = substr($linea, 0, $pos);
        $score = substr($linea, $pos+1);
        $contenido[] = array($jugador, $score);
      }
    }
    fclose($fichero);
    echo "<div class='mundial'>";
    echo "<h2>Ranquing Mundial</h2>";
    echo "<table class='r'>";
    echo "<tr>";
    echo "<th class='cabecera'>Jugador</th>";
    echo "<th class='cabecera'>Intentos</th>";
    echo "</tr>";
    foreach ($contenido as $value) {
      echo "<tr>";
      echo "<td class='ra'>".$value[0]."</td><td class='ra'>  ".$value[1]."</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

    echo "<div class='local'>";
    echo "<h2>Ranquing Local</h2>";
    echo "<table class='r'>";
    echo "<tr>";
    echo "<th class='cabecera'>Jugador</th>";
    echo "<th class='cabecera'>Intentos</th>";
    echo "</tr>";
    foreach ($_SESSION["rlocal"] as $value) {
      echo "<tr>";
      echo "<td class='ra'>".$value[0]."</td><td class='ra'>  ".$value[1]."</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
   ?>
  <div class="contenedor center">
    <h3>Quieres Jugar Otra Vez? </h3>
    <form action="juego.php" method="post">
      <input name="nombre" placeholder="Nombre: "></br></br>
      <input name="filas" placeholder="Numero de Filas: "/></br></br>
      <input name="columns" placeholder="Numero de Columnas: "/></br></br>
      <input type="Submit" class="start" value="Start Game"/>
      <a href="tablero.php" class="rank">Home</a>
    </form>
  </div>
</body>
</html>
