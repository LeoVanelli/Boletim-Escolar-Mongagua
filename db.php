<?php
$i=0;

define('HOST','localhost');
define('USUARIO','root');
define('SENHA','usbw');
define('DB','db_boletim');
$connect = mysqli_connect(HOST,USUARIO,SENHA,DB);

$busca = mysqli_query($connect,"SELECT * FROM tb_aluno WHERE cd_turma = 1") or die("Erro nos dados.");
$linha = mysqli_num_rows($busca);