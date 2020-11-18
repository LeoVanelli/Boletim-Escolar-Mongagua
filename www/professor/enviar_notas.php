<?php
    for($i=0;$i<$linha;$i++){
        $nota=$_POST['nota'.$i];
        $falta=$_POST['falta'.$i];
        $raAluno = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = '$cdTurma'"),$i,'ra_aluno');
        $cd_materia = $_POST['materia'];
        
        mysqli_query($connect,"INSERT INTO tb_notas_faltas(qt_faltas,nr_nota,cd_bimestre,ra_aluno,cd_materia) VALUES ('$falta','$nota','$bimestre','$raAluno','$cdMateria')");
    }
?>