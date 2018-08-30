 <?php
include '../functions/valida_sessao_prof.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/menu.css" />
    <title>Sistema NEJAD</title>
    </head>   
    <header>
    <?php
include 'menu_prof.inc';
?>
    </header>
    <body> 
         <nav id="tela">
                <ul>
                    <li><a href="lancar_nota.php"><img class="img_menu"src="../imagens/lancar_nota.png" width="100" height="100" alt="lançar notas"  /><br><br><b>LANÇAR NOTAS</b></a></li>
                    <li><a href="consultar_nota.php"><img class="img_menu" src="../imagens/consultar_notas.png" width="100" height="100" alt="consultar notas" /><br><br><b>CONSULTAR NOTAS</b></a></li>
                    <li><a href="lancar_orientacao.php"><img class="img_menu" src="../imagens/lancar_orientacao.png" width="100" height="100" alt="lançar orientação" /><br><br><b>LANÇAR ORIENTAÇÃO</b></a></li>
                    <li><a href="consultar_orientacao.php"><img class="img_menu" src="../imagens/consultar_orientacao.png" width="100" height="100" alt="consultar orientação" /><br><br><b>CONSULTAR ORIENTAÇÃO</b></a></li>
                    
                </ul>
           </nav>
        
        </body>
</html>
