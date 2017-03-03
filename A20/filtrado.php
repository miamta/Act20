<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>      </title>
  </head>
  <body>
    <?php
    // conexion a la BD
    include "nbaDB.php";
    $nba = new nbaDB();


  $resultado=$nba->mostrarEquipo($_POST["equipo_local"],$_POST["equipo_visitante"], $_POST["temporada"]);

     while($fila=$resultado->fetch_assoc()){
       echo "Equipo local ".$fila["equipo_local"]."<br>";
       echo "Puntos Local ".$fila["puntos_local"]."<br>";
       echo "Equipo visitante ".$fila["equipo_visitante"]."<br>";
       echo "Puntos visitantes ".$fila["puntos_visitante"]."<br>";
       echo "Temporada ".$fila["temporada"]."<br>";
       echo "<hr>";
       
}




    ?>



  </body>
</html>
