<?php
include('../../verifica_login.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>LOG ADM</title>
	<link rel="stylesheet" type="text/css" href="../../assets/css/styleADM.css">
</head>
<body>

	<div class="box">
		<h1>BOLETIM ESCOLAR MUNICIPAL</h1>
		<label>DIGITE A ESCOLA DESEJADA</label>
		<div id="divProcura">
  			<input type="text" id="txtBusca" /><a href='log.php'><button id="btnBusca">Buscar</button></a>
		</div>
	</div>
	<form action="../../logout.php" method="GET">
		<button type="submit">Sair</submit>
	</form>
</body>
</html>