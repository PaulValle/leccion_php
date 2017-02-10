<?php
session_start();
include_once("estudiantecollector.php");

$nombre = $_POST['nombre'];
$parcial = $_POST['parcial'];
$final = $_POST['final'];
$mejoramiento = $_POST['mejoramiento'];
$aprueba = $_POST['aprueba'];

$nota1 = 0;
$nota2 = 0;

$estudiantecollectorObj = new estudiantecollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
        echo "<p>Se creo un nuevo estudiante</p>";
        if ($parcial >= $mejoramiento && $parcial >= $mejoramiento){
            
        }
        $estudiantecollectorObj->createestudiante($nombre,$parcial,$final,$mejoramiento,$aprueba);
        ?>
        <a href="index.php"><button>VOLVER</button></a>
       
  
    </body>
</html>