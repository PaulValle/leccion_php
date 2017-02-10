<?php

include_once('estudiante.php');
include_once("collector.php");

class estudiantecollector extends collector
{
  
  function showestudiante() {
    $rows = self::$db->getRows("SELECT * FROM nota");        
    ##echo "linea 1";
    $arrayestudiante= array();        
    foreach ($rows as $c){
      $aux = new estudiante($c{'id'},$c{'nombre'},$c{'parcial'},$c{'final'},$c{'mejoramiento'},$c{'aprueba'});
      array_push($arrayestudiante, $aux);
    }
    return $arrayestudiante;        
  }
    
    function deleteestudiante($id) {
        $rows = self::$db->deleteRow("DELETE FROM calificaciones WHERE id=$id",null);
    
    
    }
   
    function createestudiante($nombre,$parcial,$final,$mejoramiento,$aprueba) {
        $rows = self::$db->insertRow("INSERT INTO calificaciones (nombre, parcial, final, mejoramiento, aprueba) VALUES ('$nombre', '$parcial','$final','$mejoramiento','$aprueba')",null);
        
    }
    function updateestudiante($id,$nombre,$parcial) {
        $rows = self::$db->insertRow("UPDATE calificaciones SET nombre='$nombre' , parcial='$parcial' WHERE id='$id'" ,null);
        
    }
}
?>