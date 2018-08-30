<!DOCTYPE html>
<html lang="pt-br">
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
            <a style="float:right"href=""><?php //echo "Usuário: " . $nome?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <a style="float:right" href="../../functions/logout.php">SAIR&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"></a>
        </nav>
    </header>
   <body> 
      
        <div class="container"> 
            <div class="row"> 
                <div class="column">
                    <a href="proc_grade.php"><img class="img_menu"src="../../imagens/aproveitar.png" width="100" height="100" alt="ae"  /><br><br><b>APR. ESTUDOS</b></a>

                </div>
                <div class="column">
                    <a href="proc_exibir_grade.php"><img class="img_menu" src="../../imagens/grade.png" width="100" height="100" alt="grade" /><br><br><b>GRADE CURRICULAR</b></a>


                </div> 
                <div class="column">
                    <a href="retirar_apostila.php"><img class="img_menu" src="../../imagens/apostilas.png" width="100" height="100" alt="apostilas" /><br><br><b>RETIRAR APOSTILA</b></a>

                </div>
                <div class="column">
                    <a href="imprimir_ficha.php"><img class="img_menu" src="../../imagens/ficha.png" width="100" height="100" alt="ficha" /><br><br><b>FICHA DO ALUNO</b></a>

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
