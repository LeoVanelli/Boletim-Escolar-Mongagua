<?
$raAluno = $_POST['raAluno'];

$nmAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE ra_aluno = '$raAluno'"),$i,'nm_aluno');

echo "$raAluno + $nmAluno";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Teste 4</title>
		
		<link rel="stylesheet" type="text/css" href="../../assets/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="../../assets/css/component.css" />
		<script src="../../assets/js/modernizr.custom.js"></script>
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
									<a class="gn-icon gn-icon-archive" href="aluno_boletim.html">BOLETIM</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li>
				<form action="" method="post">
				   Turma:  <select name="bimestre">
								<option value="0">Geral</option>
								<option value="1">1º Bimestre</option>
								<option value="2">2º Bimestre</option>
								<option value="3">3º Bimestre</option>
								<option value="4">4º Bimestre</option>
							</select>		
					<button type="submit">Filtrar</button>
				</form></li>
				<?php
					$bimestre = $_POST['bimestre'];
					if($bimestre>=1){
						header('Location: aluno_boletim2.php');
					}
					elseif($bimestre==0){
						header('Location: aluno_boletim.php');
					}
				?>
				<li><a class="codrops-icon codrops-icon-prev" href="../../index.php"><span>Voltar</span></a></li>
			</ul>
			<header>
				<div class="tConsolidado">
					<h1>BOLETIM</h1>
					<h3>Geral</h3>
				</div>
				<table>
					
					<thead>
						<tr>
							<th rowspan="2">Matéria</th>
							<th colspan="2">1º Bimestre</th>
							<th rowspan="2">Observação</th>
						</tr>
						<tr>
							<th>Nota</th>
							<th>Falta</th>
						</tr>
					</thead>
					<?php
					include("../../db.php");
					include("../../addons/addons.php");
					include("../../addons/buscar_notas_faltas.php");

					echo "<tbody>
						<tr>
							<th>Português</th>
							<th>$ntPort1</th>
							<th>$ftPort1</th>
							<th></th>
						</tr>
						<tr>
							<th>Matemática</th>
							<th>$ntMat1</th>
							<th>$ftMat1</th>
							<th></th>
						</tr>
						<tr>
							<th>Ciências</th>
							<th>$ntCien1</th>
							<th>$ftCien1</th>
							<th></th>
						</tr>
						<tr>
							<th>História</th>
							<th>$ntHist1</th>
							<th>$ftHist1</th>
							<th></th>
						</tr>
						<tr>
							<th>Geografia</th>
							<th>$ntGeo1</th>
							<th>$ftGeo1</th>
							<th></th>
						</tr>
						<tr>
							<th>Artes</th>
							<th>$ntArt1</th>
							<th>$ftArt1</th>
							<th>$ftArt1</th>
						</tr>
						<tr>
							<th>Ed. Física</th>
							<th>$ntEdFisc1</th>
							<th>$ftEdFisc1</th>
							<th></th>
						</tr>
						<tr>
							<th>Inglês</th>
							<th>$ntIngl1</th>
							<th>$ftIngl1</th>
							<th></th>
						</tr>
					</tbody>";
					?>
				</table>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
			</header> 
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>