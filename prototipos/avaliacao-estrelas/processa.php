<?php
session_start();
include_once("conexao.php");

$estrela = 0;
if (!empty($_POST['estrela'])) {
    $estrela = (int) $_POST['estrela'];
}

if ($estrela >= 1 && $estrela <= 5) {
    $result_avaliacos = "INSERT INTO avaliacos (qnt_estrela, created) VALUES ($estrela, NOW())";
    $resultado_avaliacos = mysqli_query($conn, $result_avaliacos);

    if (mysqli_insert_id($conn)) {
        $_SESSION['msg'] = "Avaliação registada com sucesso";
    } else {
        $_SESSION['msg'] = "Erro ao registar a avaliação";
    }
} else {
    $_SESSION['msg'] = "É necessário selecionar pelo menos 1 estrela";
}

header("Location: index.php");
exit;
