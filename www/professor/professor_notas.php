<?php error_reporting(0); ?>

<?php
	include('../../verifica_login.php');
	include("../../addons/addons.php");
	include("../../db.php");

	$bimestre="";
	$turma="";

	error_reporting(0);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Professor</title>
		
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
									<a class="gn-icon gn-icon-archive" href="# 	">NOTAS</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li>
					<form action="" method="POST">
				    Bimestre:  <select name="bimestre">
								<option value="1">1º Bim</option>
								<option value="2">2º Bim</option>
								<option value="3">3º Bim</option>
								<option value="4">4º Bim</option>
							</select>
					| Turma:  <select name="turma" id="turma" class="lbl" 		value="selectTurmas">
						<?php
							$query = "SELECT * FROM tb_turma";
							$resultado = mysqli_query($connect, $query);
							while($row_tb_turma = mysqli_fetch_assoc($resultado)){
								$nmTurma = $row_tb_turma['nm_turma'];
								$cdTurma = $row_tb_turma['cd_turma'];
								echo "<option value='$cdTurma'>$nmTurma</option>";
							};
						?>
					</select>		
					| Matéria:  <select name="cd_materia" id="materia" class="lbl" 		value="selectMateria">
						<?php
							$query = "SELECT * FROM tb_materia";
							$resultado = mysqli_query($connect, $query);
							while($row_tb_materia = mysqli_fetch_assoc($resultado)){
								$nmMateria = $row_tb_materia['nm_materia'];
								$cdMateria = $row_tb_materia['cd_materia'];
								echo "<option value='$cdMateria'>$nmMateria</option>";
							};
						?>
					</select>
					<button type="submit">Filtrar</button>
				</form></li>
				<?php
					if($bimestre = $_POST['bimestre'] && $turma = $_POST['turma']){
						$nrTurma = $_POST['turma'];
						$turma = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_turma WHERE cd_turma='$turma'"),'0','nm_turma');
					}
					else{
						$bimestre="1";
						$turma="5A";
					}
					
					$cdTurma = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_turma WHERE nm_turma='$turma'"),'0','cd_turma');
				?>
				<li><a class="codrops-icon codrops-icon-prev" href="../../logout.php"><span>Deslogar</span></a></li>
			</ul>
			<header>
				<div class="tConsolidado">
					<h1>INSERIR NOTAS</h1>
					<br><br><br><br>
					<h3>PROFESSOR MARCOS</h3>
					<h3>Matéria: Inglês</h3>
					<?php
						$arr = str_split($turma);
						echo "<h3>".$arr[0]."ª".$arr[1]."</h3>";
					?>
				</div>
				<br><br><br><br>
				<table>
					<thead>
						<tr>
							<th>Nº</th>
							<th>Nome</th>
							<th>RA</th>
							<th>Nota</th>
							<th>Falta</th>
						</tr>
					</thead>
					<form action="" method="POST">
					<?php
					$busca = mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'") or die("Erro nos dados.");
					$linha = mysqli_num_rows($busca);

					for($i;$i<$linha;$i++){
						$raAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'ra_aluno');
						$nrAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'nr_aluno');
						$nmAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'nm_aluno');
	
					echo "
					<tbody>
						<tr>
							<th name='$nrAluno$i'>$nrAluno</th>
							<th name='$nmAluno$i'>$nmAluno</th>
							<th name='$raAluno$i'>$raAluno</th>
							<th><input type='number' name='nota$i' id='nota'/></th>
							<th><input type='number' name='falta$i' id='falta'/></th>
						</tr>
					</tbody>";
				}
				?>
					<tfoot>
						<tr>
							<td></td>
							<td colspan="4"><button>Editar</button><button type="submit">Guardar</button></td>
						</tr>
					</tfoot>
				</form>
				<?php 
					for($i=0;$i<$linha;$i++){
						$nRes = 'nota'.$i;
						$fRes = 'falta'.$i;
						$nota=$_POST[$nRes];
						$falta=$_POST[$fRes];
						$raAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'ra_aluno');
						
						if($nota > 0 && $falta > 0){
							mysqli_query($connect,"INSERT INTO `db_boletim`.`tb_bimestre` (
								`cd_bimestre` ,
								`ra_aluno` ,
								`cd_materia` ,
								`nota` ,
								`falta`
								)
								VALUES (
								'$bimestre', '$raAluno', '$cdMateria', '$nota', '$falta'
								);");
						}
					}
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