<?php
include '../functions/valida_sessao_aluno.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/menu.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=-1">
        <link href="imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">

        <title>Sistema NEJAD</title>
    </head>   
    <header>
        <nav id="menu">
            <ul>
                <li><a href="aluno.php">Home</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a href="consultar_notas.php">Consultar notas</a></li>
                <li><a href="consultar_orientacao.php">Consultar orientação</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>


                <li><a href="../functions/logout.php">Sair&nbsp;<img id="sair" src="../imagens/sair.png" width="20" height="20"></a></li>
                <hr>
            </ul>
        </nav>
    </header>
    <body> 
        <nav id="tela">
            <ul>
                <li><a href="consultar_nota.php"><img class="img_menu" src="../imagens/consultar_notas.png" width="100" height="100" alt="consultar notas" /><br><br><b>CONSULTAR NOTAS</b></a></li>
                <li><a href="consultar_orientacao.php"><img class="img_menu" src="../imagens/consultar_orientacao.png" width="100" height="100" alt="consultar orientação" /><br><br><b>CONSULTAR ORIENTAÇÃO</b></a></li>
                <li><a href="agendar_prova.php"><img class="img_menu" src="../imagens/agendar_prova.png" width="100" height="100" alt="agendar_prova" /><br><br><b>AGENDAR PROVA</b></a></li>

            </ul>
        </nav>

    </body>
</html>
