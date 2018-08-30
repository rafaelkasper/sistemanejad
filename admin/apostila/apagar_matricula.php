<?php

session_start();
include '../../functions/valida_sessao_admin.php';
include "../../functions/conecta_banco.inc";
$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);
if (!empty($matricula)) {
    $resultado_usuario = $con->query("DELETE FROM t_matricula WHERE matricula='$matricula'");
    if (mysqli_affected_rows($con)) {
        echo '<div class="alert success">';
        echo '<span class="closebtn">&times;</span>';
        echo '<strong>Usuário apagado com sucesso</strong>';
        echo '</div>';
        header("Location: consultar_matricula.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
        header("Location: consultar_matricula.php");
    }
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
    header("Location: consultar_matricula.php.php");
}
