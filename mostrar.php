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
foreach ($estudianteCollectorObj->showestudiante() as $c){
  echo "<tr>";
  echo "<td>" . $c->getid() . "</td>
  <td>&ensp; " . $c->getNombre() . "</td>
  <td>&ensp; " . $c->getparcial() . "</td>
  <td>&ensp; ". $c->getfinal() . "</td>
  <td>&ensp; ". $c->getmejoramiento() . "</td>
  <td>&ensp; ". $c->getaprueba() . "</td>
  <td>&ensp; ";
      
  echo "</tr>";
}
?>
</table>
</div>

</body>
</html>