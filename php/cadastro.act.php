<?php
require('connect.php');

extract($_POST);
$senha = md5($senha);

if(mysqli_query($con,"INSERT INTO `clientes` (`nome`, `email`, `telefone`, `mensagem`) VALUES ('$nome', '$email', '$telefone', '$mensagem');")){
    $msg = "Registro concluído";
}else{
    $msg = "Erro ao criar registro";
}

session_start();
$_SESSION['msg'] = $msg;
header('location:index.html');
?>