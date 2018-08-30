<?php

session_start();
if (IsSet($_SESSION["acesso"]))
    $acesso = $_SESSION["acesso"];
if (IsSet($_SESSION["senha"]))
    $senha = $_SESSION["senha"];
if (IsSet($_SESSION["nome"]))
    $nome = $_SESSION["nome"];

if (!(empty($acesso) OR empty($senha))) {
    include "conecta_banco.inc";

    // Escapa os caracteres especiais, para evitar ataques de SQL Injection
    $acesso = $con->real_escape_string($acesso);
    $senha = $con->real_escape_string($senha);

    $consulta = $con->query("SELECT nome, acesso, senha, categoria, id FROM usuarios_autorizados WHERE acesso='$acesso' AND senha='$senha' limit 1");
    $linhas = $consulta->num_rows;
    $row = $consulta->fetch_array();
    if ($linhas == 0) {
        unset($_SESSION['acesso']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']);
        header("Location: ../index.php");
    }
} else {
    unset($_SESSION['acesso']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    header("Location: ../index.php");
}
if ($row["id"] == 1) {
    
} else {
    unset($_SESSION['acesso']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    header("Location: ../index.php");
}
$con->close();

