<?php
$servidor = "localhost";
$user = "root";
$senha = "";
$dbname = "ft6";

mysqli_report(MYSQLI_REPORT_OFF);
$conn = mysqli_connect($servidor, $user, $senha, $dbname);

if (!$conn) {
    die("Erro na ligação à base de dados.");
}

mysqli_set_charset($conn, "utf8mb4");
