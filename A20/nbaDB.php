<?php
/**
 *
 */
class nbaDB
{
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $name="nba";

  private $conexion;
  private $error=false;


// Funcion para conectarnos a la base de datos
      function __construct(){
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->name);
      if($this->conexion->connect_errno){
  $this->error=true;
    }
  }
// Funcion de error
      function geterror(){
        return $this->error;
      }


  // Funcion para mostrar los equipos en Index
        function mostrarEquipo($equipo_local, $equipo_visitante, $temporada){
        $resultado = $this->conexion->query("SELECT equipo_local, equipo_visitante, temporada, puntos_local, puntos_visitante FROM partidos where equipo_local= '".$equipo_local."' AND equipo_visitante='".$equipo_visitante."' AND temporada='".$temporada."'");
        return $resultado;


  }

























}
?>
