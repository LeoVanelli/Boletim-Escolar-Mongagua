<?php
include('../../db.php');

include('../../verifica_login.php');
$result = "SELECT * FROM tb_turma";
$resultado = mysqli_query($connect, $result) or die ("Falha ao se conectar ao banco de dados");
$alfabeto = array("A", "B", "C","D", "E", "F");

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
									<a class="gn-icon gn-icon-cog" href="secretario_gerenciar.html">GERENCIAR</a>
								</li>

								<li>
									<a class="gn-icon gn-icon-archive" href="secretario_listar.html">LISTAR</a>								
								</li>

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
				<li><a class="codrops-icon codrops-icon-prev" href="secretario_index.php"><span>Voltar</span></a></li>
			</ul>
			<header>
				<h1>CADASTRAR TURMA</h1>
				<form action="" method="POST">
				<table>
                    <tr>
                        <td class="lbl">Ano letivo</td>
                        <td><input type="text" name="anoLetivo" id="anoLetivo"></td>
                    </tr>
					<tr>
						<td class="lbl">Ano da Turma</td>
						<td><select name="anoTurma">
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                        </select></td>
					</tr>
					<tr>
						<td class="lbl">Série de</td>
						<td><select name="serie1">
                            <option value='1'>A</option>
                            <option value='2'>B</option>
                            <option value='3'>C</option>
                            <option value='4'>D</option>
                            <option value='5'>E</option>
                            <option value='6'>F</option>
                        </select> 
                        <label for="">a</label>
                        <select name="serie2">
                            <option value='1'>A</option>
                            <option value='2'>B</option>
                            <option value='3'>C</option>
                            <option value='4'>D</option>
                            <option value='5'>E</option>
                            <option value='6'>F</option>
                        </select></td>
					</tr>
					<tr>
						<td colspan="2" class="cadtb"><button class="cad" type="submit">CADASTRAR</button></td>
					</tr>
				</table> 
                </form>
                <?php
                    $turmasInseridas = "";
                    if($_POST['serie1'] <= $_POST['serie1']){
                        $serie= $_POST['serie2']-$_POST['serie1'];
                        $anoLetivo = $_POST['anoLetivo'];
                        $anoTurma = $_POST['anoTurma'];
                        $sgTurma = $alfabeto[$_POST['serie1']-1];
                        $nmTurma = "$anoTurma"."$sgTurma";
                        mysqli_query($connect, "INSERT INTO tb_turma (nm_turma,cd_escola, y_letivo) 
                                VALUES ('$nmTurma',1, '$anoLetivo')") or die("Falha ao inserir os dados");
                        $turmasInseridas +="Turmas adicionadas : ".$nmTurma;
                        for ($i = 0; $i < $serie; $i++) {
                            $sgTurma = $alfabeto[$i+$_POST['serie1']];
                            $nmTurma = "$anoTurma"."$sgTurma";
                            mysqli_query($connect, "INSERT INTO tb_turma (nm_turma,cd_escola, y_letivo) 
                                VALUES ('$nmTurma',1, '$anoLetivo')") or die("Falha ao inserir os dados");
                            $turmasInseridas +=" + ".$nmTurma;
                        }   
                    }
                    else{
                        echo "<script>alert('Campos Incorretos!')</script>";
                    }
                ?>
			</header> 
		</div>
		<script src="../../assets/js/classie.js"></script>
		<script src="../../assets/js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
	</body>
</html>