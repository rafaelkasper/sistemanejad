<?php
include '../../functions/valida_sessao.inc';
$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");
$dia = date("d", time());
$mes = date("m", time());
$ano = date("Y", time());
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../../css/menu.css" />
        <link href="../../imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <title>Sistema NEJAD</title>
    </head>   
    <header>
        <nav id="menu">
            <ul>
                <li><a href="../admin.php">HOME</a></li>
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>

                <li><a href="../../functions/logout.php">Sair&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"   ></a></li>
                <hr>
            </ul>
        </nav>
    </header>
    <body> 
        <nav id="tela">
            <ul>
                <li><a href="form_matricula_supletivo.php"><img class="img_menu"src="../../imagens/matriculas.png" width="100" height="100" alt="matriculas"  /><br><br><b>MATRÍCULA</b></a></li>
                <li><a href="consultar_notas_supletivo.php"><img class="img_menu" src="../../imagens/registrar_nota.png" width="100" height="100" alt="notas" /><br><br><b>REGISTRAR NOTAS</b></a></li>
                <li><a href="relatorio_provas_supletivo.php"><img class="img_menu" src="../../imagens/relatorios.png" width="100" height="100" alt="relatorios" /><br><br><b>RELATÓRIOS</b></a></li>
                <li><a href="historico_supletivo.php"><img class="img_menu" src="../../imagens/pessoas.png" width="100" height="100" alt="histórico" /><br><br><b>CADASTROS</b></a></li>

            </ul>
        </nav>
        <nav id="tela2">
            <ul>
                <li><a href="relatorios_provas_apostila.php"><img class="img_menu2"src="../../imagens/cadastro.png" width="100" height="100" alt="relatorios"/><br><br><b>CONSULTAR MATRÍCULA</b></a></li>
                <li><a href="consultar_apostilas.php"><img class="img_menu2" src="../../imagens/consultar_notas.png" width="100" height="100" alt="apostilas"/><br><br><b>CONSULTAR NOTAS</b></a></li>
                <li><a href="provas_apostila.php"><img class="img_menu2" src="../../imagens/historico.png" width="100" height="100" alt="provas" /><br><br><b>HISTÓRICOS</b></a></li>
                <li><a href="consultar_notas_apostila.php"><img class="img_menu2" src="../../imagens/notas.png" width="100" height="100" alt="notas" /><br><br><b>OUTROS</b></a></li>
            </ul>
        </nav>
    </body>
</html>
