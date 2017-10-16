<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/tablas.css" />
  <title>Memory</title>
</head>
<body class="fondo">
  <?php
    $filas=$_POST["filas"];;
    $columns=$_POST["columns"];
    $cont=0;
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
      19 => "glorybringer.jpg"
    );
   ?>
   <table>
     <?php
        for($x=1; $x<=$filas; $x++){
          echo "<tr>";
          for($y=1; $y<=$columns; $y++){
            echo "<td class='par'>"."<img src='img/".$cartas[$cont/2]."'/>";?><input type="radio"><?php echo "</td>";
            $cont++;
          }
        }
     ?>

   </table>
</body>
</html>
