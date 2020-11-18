<?php
include('../../db.php');
include('../../verifica_login.php');

$result = " SELECT * FROM tb_turma";
$resultado = mysqli_query($connect, $result);
$nmProfessor = "Marcos Vinicius da Rocha";	
$nmEscola = "EMEF Barigui";
$nmTurma = "5A";
?>

<!DOCTYPE HTML>
<html>

<!--===============================================================================================-->
	<head>
		<title>BOLETIM</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
<!--===============================================================================================-->
	<body>
		<div id="header">
			<div class="top">
				<div id="logo">
					<?php
					echo "<span class='image'><img src='images/avatar.jpg'></span>
						<h1 id='title'>$nmProfessor</h1>
						<p>$nmEscola - $nmTurma</p>";
					?>
				</div>
				<label for="bimestre">Bimestre:</label>
				<select name="bimestre" id="bimestre" value="selectBimestre">
					<option value="one">1º Bimestre</option>
					<option value="two">2º Bimestre</option>
					<option value="three">3º Bimestre</option>
					<option value="four">4º Bimestre</option>
				</select><br>
				<label for="turma">Turma:</label>
				<select name="turma" id="turma" value="selectTurmas">
                <?php
                    while($row_tb_turma = mysqli_fetch_assoc($resultado)){
                        $nmTurma = $row_tb_turma['nm_turma'];
                        $cdTurma = $row_tb_turma['cd_turma'];
                        echo "<option value='$cdTurma'>$nmTurma</option>";
                    };
                ?>
                </select><br>
			</div>

		</div>
<!--===============================================================================================-->
		<form action="enviar_notas.php" method = "post">			
		<div id="main">
			<section id="boletim">
				<table class="table">
					<?php
					include("../../addons/addons.php");
					include("../../db.php");
					echo "
  					<thead>
    					<tr>
							<th rowspan='2' style='border: 1px solid black;'>Nº</th>
							<th rowspan='2' style='border: 1px solid black;'>Nome</th>
							<th rowspan='2' style='border: 1px solid black;'>RA</th>
							<th rowspan='2' style='border: 1px solid black;'>Turma</th>
							<th style='border: 1px solid black;'>Nota</th>
							<th style='border: 1px solid black;'>Falta</th>
    					</tr>
  					</thead>

					<tbody>";
					
					for($i=0;$i<$linha;$i++){
						echo "<tr>";
					
						$nmAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno"),$i,'nm_aluno');
						$nrAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno"),$i,'nr_aluno');
						$raAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno"),$i,'ra_aluno');
						$turmaAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno a,tb_turma t WHERE t.cd_turma = a.cd_turma"),$i,'nm_turma');

						echo "<th>$nrAluno</th>";
						echo "<th>$nmAluno</th>";
						echo "<th name='alunoRA$i'>$raAluno</th>";
						echo "<th>$turmaAluno</th>";
						echo "<th><input type='number' size='10' max-length='10' name='notaAluno$i' id='notaAluno$i'></th>";
						echo "<th><input type='number' size='10' max-length='15' name='faltaAluno$i' id='faltaAluno$i'></th>";
						echo "</tr>";				
					}
					echo "</tbody>";
					?>
				</table>
				<button type="submit">Enviar</button>
			</section>
		</div>
		</form>
		<div id="footer">

		</div>
<!--===============================================================================================-->
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/breakpoints.min.js"></script>
			<script src="../../assets/js/main.js"></script>
<!--===============================================================================================-->
	<form action="../../logout.php" method="GET">
		<button type="submit">Sair</submit>
	</form>
	</body>
</html>