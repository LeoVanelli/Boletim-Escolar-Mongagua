<?php
session_start();
include('db.php');
include('addons/addons.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($connect, $_POST['usuario']);
$senha = mysqli_real_escape_string($connect, $_POST['senha']);

$query = "select nm_usuario from tb_usuario where nm_usuario = '{$usuario}' and nr_senha = '{$senha}'";

$query_1= "select nv_permissao from tb_usuario where nm_usuario = '$usuario' and nr_senha = '$senha' and nv_permissao = 1 LIMIT 1";
$query_2="select nv_permissao from tb_usuario where nm_usuario = '$usuario' and nr_senha = '$senha' and nv_permissao = 2 LIMIT 1";
$query_3="select nv_permissao from tb_usuario where nm_usuario = '$usuario' and nr_senha = '$senha' and nv_permissao = 3 LIMIT 1";

$result = mysqli_query($connect, $query);
$row = mysqli_num_rows($result);

$result2=mysqli_query($connect,$query_1);
$row2=mysqli_num_rows($result2);

$result3=mysqli_query($connect,$query_2);
$row3=mysqli_num_rows($result3);

$result4=mysqli_query($connect,$query_3);
$row4=mysqli_num_rows($result4);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    if($row2 == 1){
        header('Location: www/professor/professor_notas.php');
    }
    elseif($row3==1){
        header('Location: www/secretaria/secretario_index.php');
    }
    elseif($row4==1){
        header('Location: www/admin/adm_log.html');
    }
    exit();
} 
else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    exit();
}