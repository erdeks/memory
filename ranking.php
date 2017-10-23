<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ranquing</title>
</head>
<body>
  <?php
    $nombre = "puntaciones.txt"
    $fichero = fopen($nombre, "r");

    $contenido = array();
    while (!feof($fichero)){
      $linea = fgets($file);
      $pos = strpos($linea, ",");
      $jugador = substr($linea, 0, $pos);
      $score = substr($linea, 0, $pos+1);
    }

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
