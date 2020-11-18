<?php
session_start();
include('../verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>log</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div class="top">
		<div class="txtFiltro">
			<label>Filtrar por:</label> <select>
											<option>Notas</option>
											<option>Faltas</option>
											<option>Transferencia</option>
										</select>
		</div>
	</div>

	<div class="main">
		<div class="lista">
			<ul class="list-group">
  				<li class="list-group-item">ALTERAÇÃO X, PELA ESCOLA X</li>
  				<li class="list-group-item">ALTERAÇÃO Y, PELA ESCOLA Y</li>
  				<li class="list-group-item">ALTERAÇÃO X, PELA ESCOLA Y</li>
  				<li class="list-group-item">ALTERAÇÃO Y, PELA ESCOLA X</li>
			</ul>
		</div>
	</div>
</body>
</html>