<?php

class Estudiante
{
    private $id;
    private $nombre;
    private $parcial;
    private $finall;
    private $mejoramiento;
    private $aprueba;
    
     function __construct($id, $nombre, $parcial , $finall, $mejoramiento ,$aprueba) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
         $this->finall = $finall;
         $this->mejoramiento = $mejoramiento;
         $this->aprueba = $aprueba;
     }
    function __construct($id, $nombre, $parcial , $finall, $mejoramiento) {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
       $this->finall = $finall;
       $this->mejoramiento = $mejoramiento;
     }
    function __construct() {
       $this->id = $id;
       $this->nombre = $nombre;
       $this->parcial = $parcial;
         $this->finall = $finall;
         $this->mejoramiento = $mejoramiento;
         $this->aprueba = $aprueba;
     }
    
     function setid($id){
       $this->id = $id;
     } 
     function getid(){
       return $this->id;
     } 
     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     }
      function setparcial($parcial){
       $this->parcial = $parcial;
     } 
     function getparcial(){
       return $this->parcial;
     } 
    function setfinall($finall){
       $this->finall = $finall;
     } 
     function getfinall(){
       return $this->finall;
     } 
    function setmejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getmejoramiento(){
       return $this->mejoramiento;
     } 
    function setaprueba($aprueba){
       $this->aprueba = $aprueba;
     } 
     function getaprueba(){
       return $this->aprueba;
     } 
}

?> 