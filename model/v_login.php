<?php
session_start();
include_once '../factory/conexao.php';

$email = $conn->real_escape_string($_POST['Email']);
$senha = $conn->real_escape_string($_POST['Senha']);


$consultar = "SELECT * FROM tbCadPaciente WHERE Email = '$email' AND Senha = '$senha'";

$sql_query = $conn->query($consultar) or die("Falha na execução do código SQL: " . $conn->error);

$quantidade = $sql_query->num_rows;

if ($quantidade == 1) {
    header("Location: https://benizi.freeflarum.com/");
} else {
    echo "Falha ao logar! E-mail ou senha incorretos";
}