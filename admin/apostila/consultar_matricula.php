<?php
include "../../functions/conecta_banco.inc";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistema Nejad</title>
         <meta charset="UTF-8">
        
       
        <link rel="stylesheet" type="text/css" href="../../css/alerta.css" />
        <link rel="stylesheet" type="text/css" href="../../css/lista_pesquisa.css" />
        <link href="../../imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">
        
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <link href="../../imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../../css/navbar.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <nav class="topnav" id="myTopnav">

            <a href="../admin.php">HOME</a>
            <a href="agenda_admin.php">AGENDA</a>
            <a href="registrar_nota_apostila.php">LANÇAR NOTAS</a>
            <a href="consultar_notas_apostila.php">CONSULTAR NOTAS</a>
            <a href="lancar_orientacao.php">LANÇAR ORIENTAÇÃO</a>
            <a href="consultar_orientacao.php">CONSULTAR ORIENTAÇÃO</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <a style="float:right" href="../../functions/logout.php">SAIR&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"></a>

        </nav>
    </header>
    <body>
        
        <h1><b>CONSULTAR MATRÍCULA</b></h1> 
        <div class="container">
        <form id="formconsulta" class="dark-matter" method="POST"action="">
            <br>
            <p>
                &nbsp;&nbsp;&nbsp;DIGITE A PESQUISA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="60" size="50"  name="nome">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input id="pesq"name="SendPesqUser" type="submit" value="Pesquisar">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </p>
        </form>
        </div>
        <br>	
        <div class="overflow-x:auto">
            <table class="table-hover table-striped"id="pesquisar">
                <thead>
                    <tr>
                        <th>ALUNO (A)</th>
                        <th>NOME DA MÃE</th>
                        <th>MATRÍCULA</th>
                        <th>AÇÃO</th>
                        
                </thead>
                <tbody>
                    <tr>
<?php
$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
if ($SendPesqUser) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $resultado_usuario = $con->query("SELECT * FROM t_matricula WHERE Nome_Aluno LIKE '%$nome%' OR matricula LIKE '$nome' OR CPF LIKE '$nome' ORDER BY Nome_Aluno");
    while ($rows = $resultado_usuario->fetch_assoc()) { {
            echo "<td>" . $rows['Nome_Aluno'] . "</td>";
            echo "<td>" . $rows['nome_mae'] . "</td>";
            echo "<td>" . $rows['matricula'] . "</td>";
            echo "<td>" .
  "<span>" . "<a href='editar_matricula_apostila.php?matricula=" . $rows['matricula'] . "'>Editar</a>&nbsp;&nbsp;&nbsp;";
                echo "<a href='apagar_matricula.php?matricula=" . $rows['matricula'] . "'data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a><br>" . "</span>"
 . "</td>";
            echo "</tr>";
        }
    }
}
?>
                </tbody>
            </table>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="../../js/ajax.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="../../js/jquery.js"></script>
        <script src="../../js/popper.js"></script>
        <script src="../../js/bootstrap4.js"></script>
        <script src="../../js/personalizado.js"></script>	
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