<?php error_reporting(0); ?>

<!DOCTYPE html>
<html>
<!--===============================================================================================-->
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../assets/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/component.css" />
	<link rel="stylesheet" type="text/css" href="../../assets/css/styleINDEX.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<!--===============================================================================================-->
<body>
	<div class="fundo">
		<ul id="gn-menu" class="gn-menu-main">
			<li><img src="../../assets/images/mong.png"><label>Mongaguá por um futuro melhor</label></li>
			<li><a href="../../index.php">Voltar</a></li>
		</ul>
	<div class="boxLogin">
			<form class="boxTitulo" action="aluno_boletim.php" method="post">
				<span class="txtTitulo">
					DADOS DO ALUNO
				</span>

				<div class="boxInput">
					<input class="input" type="text" name="anoLet" placeholder="Ano Letivo">
				</div>

				<div class="boxInput">
					<input class="input" type="text" name="raAluno" placeholder="Número do RA">
				</div>

				<div class="boxInput">
					<input class="input" type="date" name="dtNasc" placeholder="Data de Nascimento">
				</div>

				<div class="boxButton">
					<button class="button" type="submit">
						Gerar Boletim
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