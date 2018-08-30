<?php
include '../../functions/valida_sessao_admin.php';
include '../../functions/conecta_banco.inc';
$Nome_Aluno = $_SESSION['aluno'];
$dados = $con->query("SELECT * FROM t_matricula WHERE Nome_Aluno = '$Nome_Aluno' limit 1" );
$rows = $dados->fetch_assoc();
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
        
        <link rel="stylesheet" type="text/css" href="../../css/grade.css" />
        <link rel="stylesheet" type="text/css" href="../../css/grade_ae_med.css" />
    </head>
    <header>
        <nav class="topnav" id="myTopnav">

            <a href="../admin.php">HOME</a>
            <a href="agenda_admin.php">AGENDA</a>
            <a href="registrar_nota_apostila.php">LANÇAR NOTAS</a>
            <a href="consultar_notas_apostila.php">CONSULTAR NOTAS</a>
            <a href="lancar_orientacao.php">LANÇAR ORIENTAÇÃO</a>
            <a href="consultar_orientacao.php">CONSULTAR ORIENTAÇÃO</a>
            <a style="float:right" href=""><?php echo "Usuário: " . $nome ?></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <a style="float:right" href="../../functions/logout.php">SAIR&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"></a>

        </nav>
    </header>
    <body>
        <div class="tabela">
            <h2>GRADE CURRICULAR </h2>
            <div class="nome"> <span class="nome_titulo"><?php echo"$Nome_Aluno";?></span></div>
            <form id="tela"method="POST" action="grade_apostila_med.php">
            <table class="table table-bordered table-striped table-condensed cf">
                <thead class="cf">
                    <tr>
                        <th></th>
                        <th>

                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;TOT.&nbsp;&nbsp;&nbsp;</span>

                        </th>
                        <th>

                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;01&nbsp;&nbsp;&nbsp;</span>

                        </th>
                        <th>

                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;02&nbsp;&nbsp;&nbsp;</span>

                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;03&nbsp;&nbsp;&nbsp;</span>

                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;04&nbsp;&nbsp;&nbsp;</span>

                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;05&nbsp;&nbsp;&nbsp;</span>

                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;06&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;07&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;08&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;09&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;10&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;11&nbsp;&nbsp;&nbsp;</span>
                        </th>
                        <th>
                            <span class="hidden-xs">&nbsp;&nbsp;&nbsp;12&nbsp;&nbsp;&nbsp;</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>&nbsp;&nbsp;&nbsp;ARTES&nbsp;&nbsp;&nbsp;</b></td>
                        <td><p>02</p></td>
                        <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade"src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade"src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                    </tr>
                    <tr>
                        <td><b>&nbsp;&nbsp;&nbsp;BIOLOGIA&nbsp;&nbsp;&nbsp;</b></td>
                        <td><p>06</p></td>
                        <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                    </tr>

                <td><b>&nbsp;&nbsp;&nbsp;FILOSOFIA&nbsp;&nbsp;&nbsp;</b></td>
                <td><p>01</p></td>
                <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>

                <td><b>&nbsp;&nbsp;&nbsp;FÍSICA&nbsp;&nbsp;&nbsp;</b></td>
                <td><p>05</p></td>
                 <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>

                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;GEOGRAFIA&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>08</p></td>
                    <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>

                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;HISTÓRIA&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>08</p></td>
                   <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>


                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;LÍNGUA INGLESA&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>12</p></td>
                   <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                </tr>


                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;LÍNGUA PORTUGUESA&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>07</p></td>
                     <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>

                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;MATEMÁTICA&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>12</p></td>
                    <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                </tr>
                <tr>

                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;ORGANIZAÇÃO DO &nbsp;&nbsp;<br> &nbsp;&nbsp;&nbsp;TRABALHO INTELECTUAL&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>02</p></td>
                    <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>

                <td><b>&nbsp;&nbsp;&nbsp;QUÍMICA&nbsp;&nbsp;&nbsp;</b></td>
                <td><p>05</p></td>
               <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>
                <tr>
                    <td><b>&nbsp;&nbsp;&nbsp;SOCIOLOGIA&nbsp;&nbsp;&nbsp;</b></td>
                    <td><p>01</p></td>
                   <td><label><span class="label-text">AE</span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                            <td><label><span class="label-text"><img class="img_grade" src="../../imagens/square.png" width="30" height="30"></span></label></td>
                </tr>

                </tbody>
            </table>
                <div class="boton">
                    <br>               
                <a href="pdf.php" id="imprimir">IMPRIMIR</a>
                <input id="registrar" type="submit" value="EDITAR" name="editar">
                <br>
                                   </div>
                
            </form>
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

