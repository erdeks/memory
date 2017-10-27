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
<body>
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
    echo "<h3>Ranquing Mundial</h3>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Jugador</th>";
    echo "<th>Intentos</th>";
    echo "</tr>";
    foreach ($contenido as $value) {
      echo "<tr>";
      echo "<td>".$value[0]."</td><td>  ".$value[1]."</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";

    echo "<div class='mundial'>";
    echo "</table>";
    echo "<h3>Ranquing Local</h3>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Jugador</th>";
    echo "<th>Intentos</th>";
    echo "</tr>";
    foreach ($_SESSION["rlocal"] as $value) {
      echo "<tr>";
      echo "<td>".$value[0]."</td><td>  ".$value[1]."</td>";
      echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
   ?>
  <h4>Quieres Jugar Otra Vez? </h4>
  <form action="juego.php" method="post">
    <input name="nombre" placeholder="Nombre: "></br></br>
    <input name="filas" placeholder="Numero de Filas: "/></br></br>
    <input name="columns" placeholder="Numero de Columnas: "/></br></br>
    <input type="Submit" value="Start Game"/>
  </form>
</body>
</html>
