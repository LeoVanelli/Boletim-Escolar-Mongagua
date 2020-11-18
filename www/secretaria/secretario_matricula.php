<?php 
	include('../../db.php');
	include('../../verifica_login.php');

	error_reporting(0);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Matricular Aluno</title>
		
		<link rel="stylesheet" type="text/css" href="../../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
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
									<a class="gn-icon gn-icon-cog" href="secretario_gerenciar.html" disabled="">GERENCIAR</a>
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
				<li><a class="codrops-icon codrops-icon-prev" href="secretario_index.php"><span>Voltar</span></a></li>
			</ul>
			<header>
				<h1>CADASTRAR ALUNO</h1>
				<form action="matricular.php" method="POST">
				<table>
					<tr>
						<td class="lbl">Nome:</td>
						<td><input type="text" name="nmAluno"></td>
					</tr>
					<tr>
						<td class="lbl">Data de Nascimento:</td>
						<td><input type="date" name="DataNasc"></td>
					</tr>
					<tr>
						<td class="lbl">Nome do Responsavel:</td>
						<td><input type="text" name="nmResponsavel"></td>
					</tr>
					<tr>
						<td class="lbl">RA do Aluno:</td>
						<td><input type="text" name="raAluno"></td>
					</tr>
					<tr>
						<td class="lbl">Ano Letivo:</td>
						<td><input type="number" min="2001" max="2020" value="2021" name="anoLet"></td>
					</tr>
					<tr>
						<td class="lbl">Turma:</td>
						<td><select name="turma" id="turma" class="lbl" value="selectTurmas">
							<?php
								$query = "SELECT * FROM tb_turma";
								$resultado = mysqli_query($connect, $query);
								while($row_tb_turma = mysqli_fetch_assoc($resultado)){
									$nmTurma = $row_tb_turma['nm_turma'];
									$cdTurma = $row_tb_turma['cd_turma'];
									echo "<option value='$cdTurma'>$nmTurma</option>";
								};
							?>
						</select></td>
					</tr>
					<tr>
						<td colspan="2" class="cadtb"><button class="cad">CADASTRAR</button></td>
					</tr>
				</table> 
				</form>
			</header> 
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>