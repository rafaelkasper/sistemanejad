<?php

$acesso = $_POST["acesso"];
$senha = $_POST["senha"];
// acesso ao banco de dados
include "conecta_banco.inc";
$acesso = $con->real_escape_string($acesso);
$senha = $con->real_escape_string($senha);
if ($acesso != '0' && $senha != '0') {
    $consulta = $con->query("SELECT acesso, senha, nome, id FROM usuarios_autorizados WHERE acesso='$acesso' AND senha='$senha' limit 1");
    $linhas = $consulta->num_rows;
    $row = $consulta->fetch_array();
    $nome = $row ['nome'];
    if ($linhas == 0) {
        echo "<html><body>";
        echo "<h1 align=\"center\">O login não foi realizado porque os dados digitados são inválidos.</h1>";
        echo "<h2 align=\"center\"><a href=\"../index.php\">Voltar</a></h1>";
        echo "</body></html>";
    } else {

        if ($row["id"] == 1) {
            session_start();
            $_SESSION['acesso'] = $acesso;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            header("Location: ../admin/admin.php?matricula=$matricula");
        } elseif ($row["id"] == 2) {
            session_start();
            $_SESSION['acesso'] = $acesso;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            header("Location: ../professor/professor.php?matricula=$matricula");
        } else {
            session_start();
            $_SESSION['acesso'] = $acesso;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            header("Location: ../aluno/aluno.php?matricula=$matricula");
        }
    }
}
$con = null;
?>