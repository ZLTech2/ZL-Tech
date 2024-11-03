<?php
ob_start();
require('connect.php');

extract($_POST);

if (mysqli_query($con, "INSERT INTO `clientes` (`nome`, `email`, `telefone`, `mensagem`) VALUES ('$nome', '$email', '$telefone', '$mensagem');")) {
    $response = ["status" => "success", "msg" => "Mensagem enviada!"];
} else {
    $response = ["status" => "error", "msg" => "Erro ao criar registro: " . mysqli_error($con)];
}

header('Content-Type: application/json');
echo json_encode($response);

ob_end_flush(); // Encerra o buffer de saída
exit; // Garante que o script termine imediatamente