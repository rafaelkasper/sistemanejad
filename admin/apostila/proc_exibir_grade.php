<?php
include '../../functions/valida_sessao_admin.php';
include '../../functions/conecta_banco.inc';
$Nome_Aluno = $_SESSION['aluno'];
$dados = $con->query("SELECT * FROM t_matricula WHERE Nome_Aluno = '$Nome_Aluno' limit 1" );
$rows = $dados->fetch_assoc();
if ($rows['Curso'] == "Ensino Fundamental"){
        header("Location: exibir_grade_fund.php");
}
else {
     header("Location: exibir_grade_med.php");
}