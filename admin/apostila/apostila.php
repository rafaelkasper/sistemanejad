<?php
include '../../functions/valida_sessao_admin.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="../../css/menu.css" />
        <link href="../../imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../../css/navbar.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sistema NEJAD</title>
    </head>   
    <header>

        <nav class="topnav" id="myTopnav">

            <a href="../admin.php">HOME</a>
            <a href="agenda_admin.php">AGENDA</a>
            <a href="registrar_nota_apostila.php">LANÇAR NOTAS</a>
            <a href="consultar_notas_apostila.php">CONSULTAR NOTAS</a>
            <a href="lancar_orientacao.php">LANÇAR ORIENTAÇÃO</a>
            <a href="consultar_orientacao.php">CONSULTAR ORIENTAÇÃO</a>
            <a style="float:right"href=""><?php echo "Usuário: " . $nome ?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <a style="float:right" href="../../functions/logout.php">SAIR&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"></a>

        </nav>

    </header>
    <body> 
        <!--<h3 align = 'center'> <?php echo "Bem vindo &nbsp;&nbsp;   " . $nome ?></h3>-->
        <div class="container"> 
            <div class="row"> 
                <div class="column">
                    <a href="form_matricula.php"><img class="img_menu"src="../../imagens/matriculas.png" width="100" height="100" alt="matricula"  /><br><br><b>MATRÍCULA</b></a>

                </div>
                <div class="column">
                    <a href="consultar_matricula.php"><img class="img_menu" src="../../imagens/cadastro.png" width="100" height="100" alt="consultar cadastro" /><br><br><b>CONSULTA MATRÍCULA</b></a>


                </div> 
                <div class="column">
                    <a href="retirar_apostila.php"><img class="img_menu" src="../../imagens/apostilas.png" width="100" height="100" alt="apostilas" /><br><br><b>RETIRAR APOSTILA</b></a>

                </div>
                <div class="column">
                    <a href="historico_apostila.php"><img class="img_menu" src="../../imagens/historico.png" width="100" height="100" alt="historicos" /><br><br><b>HISTÓRICOS</b></a>

                </div>

                <div class="column">
                    <a href="relatorios_provas_apostila.php"><img class="img_menu2" src="../../imagens/relatorios.png" width="100" height="100" alt="relatorios"/><br><br><b>RELATÓRIOS</b></a>   
                </div>
                <div class="column">
                    <a href="consultar_apostilas.php"><img class="img_menu2" src="../../imagens/apostilas.png" width="100" height="100" alt="apostilas"/><br><br><b>APOSTILAS</b></a>  

                </div> 
                <div class="column">
                    <a href="provas_apostila.php"><img class="img_menu2" src="../../imagens/provas.png" width="100" height="100" alt="provas" /><br><br><b>PROVAS</b></a>    
                </div>
                <div class="column">
                    <a href="consultar_notas_apostila.php"><img class="img_menu2" src="../../imagens/notas.png" width="100" height="100" alt="notas" /><br><br><b>NOTAS</b></a>      </div>
            </div>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>
