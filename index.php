
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
		    <meta charset="UTF-8">
			<title>Formulario</title>
</head>
<body>
                <h1>Formulario</h1>
					<form action="login.php" method="get"> 
					    <label>Nombre: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					    <input type="text" name="nombre"><br>
					    <label>Parcial:</label>
					    <input type="text" name="parcial"><br>
					    <label>Final: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					    <input type="text" name="final"><br>
					    <label>Mejoramiento:</label>
					    <input type="text" name="mejoramiento"><br>
					    <button type="text">Ingresar</button> 
					 </form>
    </body>
</html>