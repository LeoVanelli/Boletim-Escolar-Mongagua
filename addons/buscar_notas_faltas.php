<?php
    $frequencia = 0;
    //Português
    error_reporting(0);
    $ntPort1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftPort1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntPort2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftPort2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntPort3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftPort3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntPort4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftPort4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '1' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //Matemática
    $ntMat1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftMat1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntMat2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftMat2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntMat3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftMat3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntMat4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftMat4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '2' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //Ciências
    $ntCien1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftCien1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntCien2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftCien2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntCien3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftCien3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntCien4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftCien4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '3' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //História
    $ntHist1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftHist1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntHist2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftHist2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntHist3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftHist3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntHist4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftHist4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '4' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //Geografia
    $ntGeo1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftGeo1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntGeo2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftGeo2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntGeo3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftGeo3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntGeo4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftGeo4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '5' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //Arte
    $ntArte1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftArte1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntArte2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftArte2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntArte3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftArte3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntArte4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftArte4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '6' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //Educação Fisica
    $ntEdFisc1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftEdFisc1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntEdFisc2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftEdFisc2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntEdFisc3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftEdFisc3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntEdFisc4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftEdFisc4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '7' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

    //Inglês
    $ntIngl1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'nota');
    $ftIngl1 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '1'"),$i,'falta');
    $ntIngl2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'nota');
    $ftIngl2 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '2'"),$i,'falta');
    $ntIngl3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'nota');
    $ftIngl3 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '3'"),$i,'falta');
    $ntIngl4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'nota');
    $ftIngl4 = mysqli_result(mysqli_query($connect,"SELECT * FROM tb_bimestre WHERE cd_materia = '8' AND ra_aluno = '$raAluno' AND cd_bimestre = '4'"),$i,'falta');
    $frequencia+=$ftPort1;

?>