<?php
	include('../../verifica_login.php');

	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Menu Secretário</title>
		<link rel="stylesheet" type="text/css" href="../../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/component2.css" />
		<script src="../../js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
									<a class="gn-icon gn-icon-cog" href="#">GERENCIAR</a>
								</li>

								<li>
									<a class="gn-icon gn-icon-archive" href="secretario_listar.html">LISTAR</a>					
								</li>

								<li>
									<a class="gn-icon gn-icon-download" href="secretario_gerar.html">GERAR BOLETIM</a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download" href="secretario_listarAluno.html">VERIFICAR RESULTADO POR CLASSE</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>	
				<li><a class="codrops-icon codrops-icon-prev" href="../../logout.php"><span>Deslogar</span></a></li>
			</ul>
			<header>
				<h1>GERENCIAR</h1>
				<a href="secretario_turma.php"><button class="opc">Gerenciar Turmas</button></a>
				<a href="secretario_matricula.php"><button class="opc">Matricular Aluno</button></a>
				<a href="secretario_cons.php"><button class="opc">Consolidado</button></a>
			</header> 
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>