<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<!--===============================================================================================-->
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/component.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styleINDEX.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<!--===============================================================================================-->
<body>
	<div class="fundo">
		<ul id="gn-menu" class="gn-menu-main">
			<li><img src="assets/images/mong.png"><label>Mongaguá por um futuro melhor</label></li>
			<li><a href="www/aluno/aluno_index.php">Boletim do Aluno</a></li>
		</ul>
	<div class="boxLogin">
		<?php
			if(isset($_SESSION['nao_autenticado'])):
		?>
			<div class="notification is-danger">
				<p>ERRO: Usuário ou senha inválidos.</p>
			</div>
		<?php
			endif;
			unset($_SESSION['nao_autenticado']);
        ?>
			<form class="boxTitulo" action="login.php" method="post">
				<span class="txtTitulo">
					BEM-VINDO
				</span>

				<div class="boxInput">
					<input class="input" type="text" name="usuario" placeholder="Usuário">
				</div>

				<div class="boxInput">
					<input class="input" type="password" name="senha" placeholder="Senha">
				</div>

				<div class="boxButton">
					<button class="button">
						LOGIN
					</button>
				</div>
			</form>

		</div>
	</div>
	<footer>
			&#0169 2020 | <a href="https://www.mongagua.sp.gov.br"/>CubLoad</a>
		</footer>
</body>
<!--===============================================================================================-->
</html>