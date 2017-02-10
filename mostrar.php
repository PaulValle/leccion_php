<?php
session_start();
include_once("estudiantecollector.php");

$id = 1;

$estudianteCollectorObj = new estudiantecollector();
?>
<!Doctype html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<div>
<table>
<?php
foreach ($estudianteCollectorObj->showestudiantes() as $c){
  echo "<tr>";
  echo "<td>" . $c->getid() . "</td>
  <td>&ensp; " . $c->getNombre() . "</td>
  <td>&ensp; " . $c->getparcial() . "</td>
  <td> <a href = 'delete_estudiante.php?id=" . $c->getIdestudiante() . "'> <button> Editar </button></a></td> <td><a href 
= 'delete_estudiante.php?id=". $c->getIdestudiante() ."'><button> Eliminar </button></a></td>"  ;
  echo "</tr>";
}
?>
</table>
</div>
<a href = "save_estudiante.php">Crear Nuevo Usuario</a>
<a href = "logout.php">Salir</a>
</body>
</html>