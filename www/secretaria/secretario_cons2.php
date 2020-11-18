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
					<h1>CONSOLIDADO 5ªA</h1>
					<h3>Conselho Final</h3>
				</div>
				<table>
				<thead>
						<tr>
							<th>Nº</th>
							<th>Nome</th>
							<th>Português</th>
							<th>Matemática</th>
							<th>Ciências</th>
							<th>História</th>
							<th>Geografia</th>
							<th>Artes</th>
							<th>Ed. Física</th>
							<th>Inglês</th>
							<th>Parecer final</th>
							<th>Total de Faltas</th>
							<th>Total de Aulas Dadas</th>
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

						echo "
						<tbody>
						<tr>
							<th>$nrAluno</th>
							<th>$nmAluno</th>
							<th>$ntPort1</th>
							<th>$ntMat1</th>
							<th>$ntCien1</th>
							<th>$ntHist1</th>
							<th>$ntGeo1</th>
							<th>$ntArte1</th>
							<th>$ntEdFisc1</th>
							<th>$ntIngl1</th>
							<th>
							<select>
								<option>Aprovado</option>
								<option>Abandono</option>
								<option>Promovido em Conselho de Classe / Série</option>
								<option>Retido Rendimento e Frequência</option>
								<option>Retido por Frequência</option>
								<option>Retido for Rendimento</option>
								<option>Transferido</option>
								<option>Recuperação</option>
							</select></th>
							<th>$frequencia</th>
							<th>0</th>
						</tr>
					</tbody>";
				}		
					?>
				</table>
				<div class="back"><a href="secretario_cons.php"><<<<</a></div>
			</header>
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>
