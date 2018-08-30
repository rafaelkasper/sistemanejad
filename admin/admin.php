<?php
include '../functions/valida_sessao.inc';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/admin.css" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <link href="../imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/navbar.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Sistema NEJAD</title>
    </head>   
    <header>
        <nav class="topnav" id="myTopnav">

            <a href="admin.php">HOME</a>
            <a href="apostila/agenda_admin.php">AGENDA</a>

            <a style="float:right" href=""><?php echo "Usuário: " . $nome ?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <a style="float:right" href="../functions/logout.php">SAIR&nbsp;<img id="sair" src="../imagens/sair.png" width="20" height="20"></a>

        </nav>
    </header>
    <body> 
        
         <div class="container"> 
            <div class="row"> 
                <div class="column">
                <a href="apostila/apostila.php"><img class="img_menu" src="../imagens/apostila.png" width="200" height="200" alt="apostilas" /><br><br><b>MÓDULO APOSTILAS</b></a>
                </div>
                <div class="column">
                <a href="supletivo/supletivo.php"><img class="img_menu"src="../imagens/supletivo.png" width="200" height="200" alt="supletivo"  /><br><br><b>MÓDULO SUPLETIVO</b></a>

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

