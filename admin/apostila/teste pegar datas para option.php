<?php
include '../../functions/valida_sessao_admin.php';
include "../../functions/conecta_banco.inc";
$resultado_events = $con->query("SELECT id, title, color, start, end FROM events");
$row = mysqli_fetch_array($resultado_events);


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
       <select class="form-control" name="nome_fantasia">
  <option></option>
    <?php 

       

       while($row = mysqli_fetch_assoc($resultado_events)) {
         echo '<option value=""> '.$row['title'].''.$row['start'].'</option>';
       }
    ?>
</select>
    </body>
</html>
