<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <script type="text/JavaScript" src="juego.js"></script>
  <title>Memory</title>
</head>
<body class="fondo" onload="inicializar()">
  <?php
    $filas=$_POST["filas"];;
    $columns=$_POST["columns"];
    $nombre = $_POST["nombre"];
    $cont=0;
    $cont2=1;
    $maxCartas = $filas*$columns/2;
    $cartas = array(
      0 => "aether_hub.jpg",
      1 => "botanical_sanctum.jpg",
      2 => "spirebluff_canal.jpg",
      3 => "scavenger_grounds.jpg",
      4 => "rootbound_crag.jpg",
      5 => "mountain.jpg",
      6 => "island.jpg",
      7 => "forest.jpg",
      8 => "attune_with_aether.jpg",
      9 => "harnessed_lightning.jpg",
      10 => "magma_spray.jpg",
      11 => "lightning_strike.jpg",
      12 => "skysovereign.jpg",
      13 => "servant_of_the_conduit.jpg",
      14 => "longtusk_cub.jpg",
      15 => "rhonas.jpg",
      16 => "rogue_refiner.jpg",
      17 => "whirler_virtuoso.jpg",
      18 => "bristling_hydra.jpg",
      19 => "glorybringer.jpg",
      20 => "abrade.jpg",
      21 => "appetite_for_the_unnatural.jpg",
      22 => "chandra.jpg",
      23 => "commit.jpg",
      24 => "confiscation_coup.jpg",
      25 => "lifecrafter_bestiary.jpg",
      26 => "negate.jpg",
      27 => "spell_pierce.jpg",
      28 => "sweltering_suns.jpg",
      29 => "hour_of_devastation.jpg",
      30 => "torrential_gearhulk.jpg",
      31 => "vizier_of_many_faces.jpg",
    );
    if(!isset($_SESSION["cartasMix"])){
      $cartasDobles = array();
      $cartasMix = array();
      foreach($cartas as $key => $value){
        $cartasDobles[] = array($key, $value);
        $cartasDobles[] = array($key, $value);
        if ($cont2==$maxCartas) {
          break;
        }
        $cont2++;
      }

      while(!empty($cartasDobles)){
        $indiceCarta = array_rand($cartasDobles);
        $cartasMix[] = array($cartasDobles[$indiceCarta][0], $cartasDobles[$indiceCarta][1]);
        unset($cartasDobles[$indiceCarta]);
      }
      $_SESSION["cartasMix"]= $cartasMix;
    }
    echo '<form id="hform" style="display:none;" method="post" action="puntuacion.php">
      <input name="hnombre" id="hnombre" value="'.$nombre.'"/>
      <input name="hscore" id="hscore"/>
      <input type="Submit" id="hsend"/>
    </form>';
   ?>

   <h2>MTG Memory</h2>
     <?php
      echo "<a href='tablero.php'>BACK</a>";
      echo "<h3>Intentos: <span id='intentos'></span> Nombre: ".$nombre."</h3>";
      echo "<table>";
      for($x=1; $x<=$filas; $x++){
        echo "<tr>";
        for($y=1; $y<=$columns; $y++){
          echo "<td>";
          echo '<div carta="'.$_SESSION["cartasMix"][$cont][0].'" class="card">';
          echo "<div class='back'><img src='img/".$_SESSION["cartasMix"][$cont][1]."'></div>";
          echo "<div class='front'><img src='img/dorso.jpeg'></div>";
          echo "</div>";
          echo "</td>";
          $cont++;
        }
        echo "</tr>";
      }
      echo "</table>";
     ?>


</body>
</html>
