<?php 
	include('../../verifica_login.php');
	include("../../addons/addons.php");
	include("../../db.php");

	$ano="";
	$serie="";

	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Consolidado</title>
		
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
									<a class="gn-icon gn-icon-cog" href="secretario_gerenciar.html">GERENCIAR</a>
								</li>

								<li>
									<a class="gn-icon gn-icon-archive" class="#">LISTAR</a>								</li>

								<li>
									<a class="gn-icon gn-icon-download" href="secretario_gerar.html">GERAR BOLETIM</a>
								</li>
								<li>
									<a class="gn-icon gn-icon-download" href="secretario_listarAluno.html">Verificar Resultado por Classe</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li>
				<form action="" method="post">
					Periodo: <select name="periodo">
								<option value="manha">Manhã</option>
								<option value="tarde">Tarde</option>
								<option value="noite">Noite</option>
							</select>
				   | Turma:  <select name="ano">
								<option value="5">5º</option>
								<option value="6">6º</option>
								<option value="7">7º</option>
								<option value="8">8º</option>
								<option value="9">9º</option>
							</select>		
				   | Sala:	 <select name="serie">
								<option value="0">A</option>
								<option value="1">B</option>
								<option value="2">C</option>
								<option value="3">D</option>
								<option value="4">E</option>
								<option value="5">F</option>
							</select>
					<button type="submit">Filtrar</button>
				</form></li>
				<?php
					$alfabeto = array("A", "B", "C","D", "E", "F");
					if($ano = $_POST['ano']){
						$ano = $_POST['ano'];
						$serie = $_POST['serie'];
					}
					else{
						$ano="5";
						$serie="0";
					}
						
					$turma = $ano.$alfabeto[$serie];

					$cdTurma = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_turma WHERE nm_turma='$turma'"),'0','cd_turma');
				?>
				<li><a class="codrops-icon codrops-icon-prev" href="secretario_index.php"><span>Voltar</span></a></li>
			</ul>
			<header>
				<div class="tConsolidado">
					<?php
						echo "<h1>CONSOLIDADO ".$ano."ª".$alfabeto[$serie]."</h1>";
					?>
					<h3>Média Final</h3>
				</div>
				<table>
					 <thead>
						<tr>
							<th>Nº</th>
							<th>Nome</th>
							<th>RA</th>
							<th>Português</th>
							<th>Matemática</th>
							<th>Ciências</th>
							<th>História</th>
							<th>Geografia</th>
							<th>Artes</th>
							<th>Ed. Física</th>
							<th>Inglês</th>
							<th>Frequência Geral</th>
						</tr>
					</thead>
					<?php
					$busca = mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'") or die("Erro nos dados.");
					$linha = mysqli_num_rows($busca);

					for($i;$i<$linha;$i++){
						$raAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'ra_aluno');
						$nrAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'nr_aluno');
						$nmAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'nm_aluno');
	
						include("../../addons/buscar_notas_faltas.php");
						
						$ntPortGeral = ($ntPort1+$ntPort2+$ntPort3+$ntPort4)/4;
						$ntMatGeral = ($ntMat1+$ntMat2+$ntMat3+$ntMat4)/4;
						$ntCienGeral = ($ntCien1+$ntCien2+$ntCien3+$ntCien4)/4;
						$ntHistGeral = ($ntHist1+$ntHist2+$ntHist3+$ntHist4)/4;
						$ntGeoGeral = ($ntGeo1+$ntGeo2+$ntGeo3+$ntGeo4)/4;
						$ntArteGeral = ($ntArte1+$ntArte2+$ntArte3+$ntArte4)/4;
						$ntEdFiscGeral = ($ntEdFisc1+$ntEdFisc2+$ntEdFisc3+$ntEdFisc4)/4;
						$ntInglGeral = ($ntIngl1+$ntIngl2+$ntIngl3+$ntIngl4)/4;
					echo "
					<tbody>
						<tr>
							<th>$nrAluno</th>
							<th>$nmAluno</th>
							<th>$raAluno</th>
							<th>$ntPortGeral</th>
							<th>$ntMatGeral</th>
							<th>$ntCienGeral</th>
							<th>$ntHistGeral</th>
							<th>$ntGeoGeral</th>
							<th>$ntArteGeral</th>
							<th>$ntEdFiscGeral</th>
							<th>$ntInglGeral</th>
							<th>$frequencia</th>
						</tr>
					</tbody>";
				}		
					?>
				</table>
				<div class="next"><a href="secretario_cons2.php">>>></a></div>
			</header>
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
