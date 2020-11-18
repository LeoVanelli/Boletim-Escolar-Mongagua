<?php
    include('../../db.php');

    $raAluno = $_POST['raAluno'];
    $nmAluno = $_POST['nmAluno'];
    $nmResp = $_POST['nmResponsavel'];
    $turma = $_POST['turma'];   
    $dtNasc = $_POST['DataNasc'];
    $anoLetivo = $_POST['anoLet'];

    if(mysqli_query($connect, "INSERT INTO tb_aluno (ra_aluno, nm_aluno,nm_responsavel,cd_turma,dt_nasc,y_letivo) VALUES ('$raAluno','$nmAluno','$nmResp','$turma','$dtNasc','$anoLetivo')")){
        echo "<script>alert('Aluno cadastrado com sucesso !')</script>";
        header("Location: secretario_matricula.php");
        exit();
    }
    else{
        header("Location: secretario_matricula.php");
        exit();
    }
?>