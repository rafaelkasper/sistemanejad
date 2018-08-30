<?php
include '../../functions/valida_sessao_admin.php';
include "../../functions/conecta_banco.inc";
$matricula = filter_input(INPUT_GET, 'matricula', FILTER_SANITIZE_NUMBER_INT);

$resultado_usuario = $con->query("SELECT * FROM t_matricula WHERE matricula = '$matricula'");
$row_usuario = $resultado_usuario->fetch_assoc();
$curso= $row_usuario['Curso'];

date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../css/formularios.css" />
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
       
        <h1>ALTERAR MATRÍCULA</h1>
         <div class="container2">
        <form id="form" class="dark-matter2" action="func_editarmatricula.php" method="POST">
            <p id="grau">
                CURSO: &nbsp;&nbsp;
                ENSINO FUNDAMENTAL: &nbsp;&nbsp;<input class="grau" type="radio" value="Ensino Fundamental &nbsp;" <?php
                if ($row_usuario["Curso"] == 1.0) {
                    echo "checked";
                }
                ?> name="Curso">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                ENSINO MÉDIO: &nbsp;&nbsp;<input class="grau" type="radio" value="Ensino Médio &nbsp;" <?php
                if ($row_usuario["Curso"] == 2.0) {
                    echo "checked";
                }
                ?> name="Curso">&nbsp;
                &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                MATRÍCULA: &nbsp;&nbsp;&nbsp;<input class="grau"  maxlength="15" size="15" disabled="true" value=" &nbsp;<?php echo $row_usuario["matricula"]; ?>"name="matricula" >&nbsp;
            </p>        
            <hr>

            <p>NOME:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="50" size="50" tabindex="1" name="Nome_Aluno" value="&nbsp;&nbsp;<?php echo $row_usuario["Nome_Aluno"]; ?>">&nbsp;&nbsp;
                DATA DE NASCIMENTO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="10" size="10" tabindex="2" name="Data_Nascimento" value="&nbsp;<?php echo $row_usuario["Data_Nascimento"]; ?>">

            </p>
            <p>
                GÊNERO: &nbsp;&nbsp;
                MASCULINO  <input type="radio"value="Masculino &nbsp;"<?php
                if ($row_usuario["Sexo"] == 1.0) {
                    echo "checked";
                }
                ?> name="Sexo">&nbsp;
                &nbsp;&nbsp;&nbsp;
                FEMININO  <input type="radio"value="Feminino &nbsp;"<?php
                if ($row_usuario["Sexo"] == 2.0) {
                    echo "checked";
                }
                ?> name="Sexo">&nbsp;
            </p>
            <p>
                ESTADO CIVIL:&nbsp;&nbsp;&nbsp; 
                SOLTEIRO(A)  <input type="radio"value="Solteiro &nbsp;"<?php
                if ($row_usuario["Estado_Civil"] == 1.0) {
                    echo "checked";
                }
                ?> name="Estado_Civil">&nbsp;
                &nbsp;&nbsp;&nbsp;
                CASADO (A)  <input type="radio"value="Casado &nbsp;"<?php
                if ($row_usuario["Estado_Civil"] == 2.0) {
                    echo "checked";
                }
                ?> name="Estado_Civil">&nbsp;

            </p>
            <p>
                NATURALIDADE:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="30" size="30" tabindex="5" name="Naturalidade" value="&nbsp;<?php echo $row_usuario["Naturalidade"]; ?>"> &nbsp;&nbsp;&nbsp;
                UF:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="2" size="2" tabindex="6" name="UF2" value="<?php echo $row_usuario["UF2"]; ?>"&nbsp;>&nbsp;&nbsp;
                NACIONALIDADE:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="20" size="20" tabindex="7" name="Nacionalidade" value="&nbsp;<?php echo $row_usuario["Nacionalidade"]; ?>"></p>
            <p>
                NOME DO PAI:&nbsp;&nbsp;<input class="caixa" maxlength="40" size="40" tabindex="8" name="Nome_Pai" value="&nbsp;<?php echo $row_usuario["Nome_Pai"]; ?>">&nbsp;
                NOME DA MÃE:&nbsp;&nbsp;<input class="caixa" maxlength="40" size="40" tabindex="9" name="nome_mae" value="&nbsp;<?php echo $row_usuario["nome_mae"]; ?>"></p>
            <hr>
            <p>
                RG:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="12" size="12" tabindex="10" name="Identidade"value="&nbsp;<?php echo $row_usuario["Identidade"]; ?>">&nbsp;&nbsp;&nbsp;
                ÓRGÃO EXPEDIDOR:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="12" size="12" tabindex="11" name="Órgão" value="&nbsp;<?php echo $row_usuario["Órgão"]; ?>">&nbsp;&nbsp;&nbsp;
                UF:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="2" size="2" tabindex="12" name="UF" value="&nbsp;<?php echo $row_usuario["UF"]; ?>"> 
                EMISSÃO:&nbsp;&nbsp;&nbsp; <input class="caixa" maxlength="10" size="10" tabindex="13" name="Data_Expedição" value="&nbsp;<?php echo $row_usuario["Data_Expedição"]; ?>">

            <p>
                CPF:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="14" size="14" tabindex="16" name="CPF" value="&nbsp;<?php echo $row_usuario["CPF"]; ?>">&nbsp;&nbsp;&nbsp;
                CNH:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="14" size="14" tabindex="17" name="CNH" value="&nbsp;<?php echo $row_usuario["CNH"]; ?>">&nbsp;&nbsp;
                CARTEIRA DE TRABALHO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="14" size="14" tabindex="18" name="carteiratrabalho" value="&nbsp;<?php echo$row_usuario["carteiratrabalho"]; ?>">
            </p>
            <p>
                TÍTULO DE ELEITOR:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="14" size="14" tabindex="19" name="Título_Eleitor" value="&nbsp;<?php echo $row_usuario["Título_Eleitor"]; ?>">
                ZONA:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="8" size="8" tabindex="20" name="Zona" value="&nbsp;<?php echo $row_usuario["Zona"]; ?>">
                SESSÃO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="8" size="8" tabindex="21" name="Seção" value="&nbsp;<?php echo $row_usuario["Seção"]; ?>">
            </p>
            <p>
                NASCIMENTO&nbsp;&nbsp;&nbsp;&nbsp;
                <input value="&nbsp;<?php echo $row_usuario["Certidão_Nascimento"]; ?>" name="Certidão_Nascimento">&nbsp;&nbsp;&nbsp;
                CASAMENTO&nbsp;
                <input value="&nbsp;<?php echo $row_usuario["Certidão_Casamento"]; ?>"name="Certidão_Casamento">&nbsp;&nbsp;&nbsp;
            </p>
            <p>
                EXPEDIDOR:&nbsp;&nbsp;<input class="caixa" maxlength="12" size="20" tabindex="23" name="cartorio_certidao_nasc" value="&nbsp;<?php echo $row_usuario["cartorio_certidao_nasc"]; ?>">&nbsp;&nbsp;&nbsp;
                FOLHA:&nbsp;&nbsp;<input class="caixa" maxlength="12" size="12" tabindex="24" name="folha_certidao_nasc" value="&nbsp;<?php echo $row_usuario["folha_certidao_nasc"]; ?>">&nbsp;&nbsp;
                LIVRO:&nbsp;<input class="caixa" maxlength="12" size="12" tabindex="25" name="livro_certidao_nasc" value="&nbsp;<?php echo $row_usuario["livro_certidao_nasc"]; ?>"></p>
            <hr>

            <p>
                ENDEREÇO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="50" size="50" tabindex="26" name="Endereço" value="&nbsp;<?php echo $row_usuario["Endereço"]; ?>">&nbsp;&nbsp;&nbsp;
                COMPL.:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="20" size="20" tabindex="27" name="complemento" value="&nbsp;<?php echo $row_usuario["complemento"]; ?>"></p>
            <p>
                BAIRRO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="40" size="30" tabindex="28" name="Bairro" value="&nbsp;<?php echo $row_usuario["Bairro"]; ?>">&nbsp;&nbsp;&nbsp;
                CIDADE:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="40" size="40" tabindex="29" name="Cidade" value="&nbsp;<?php echo $row_usuario["Cidade"]; ?>"></p>
            <p>
                ESTADO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="2" size="2" tabindex="30" name="UF" value="&nbsp;<?php echo $row_usuario["UF"]; ?>">&nbsp;&nbsp;&nbsp;
                CEP:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="9" size="9" tabindex="31" name="CEP" value="&nbsp;<?php echo $row_usuario["CEP"]; ?>"></p>
            <hr>
            <p>
                TELEFONE:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="18" size="18" tabindex="32" name="Telefone_Residencial" value="&nbsp;<?php echo $row_usuario["Telefone_Residencial"]; ?>">&nbsp;&nbsp;&nbsp;
                CELULAR:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="18" size="18" tabindex="33" name="nro_celular" value="&nbsp;<?php echo $row_usuario["nro_celular"]; ?>"> &nbsp;&nbsp;&nbsp;
                TELEFONE RECADO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="18" size="18" tabindex="34" name="Telefone_Recado" value="&nbsp;<?php echo $row_usuario["Telefone_Recado"]; ?>">
            </p>
            <hr>
            <p>

                CPF DE ACESSO:&nbsp;&nbsp;&nbsp;<input class="caixa" maxlength="12" size="12" tabindex="35" name="acesso" value="&nbsp;<?php echo $row_usuario["acesso"]; ?>"></p>
            <p>
                SENHA:&nbsp;&nbsp;&nbsp;<input class="caixa"maxlength="12" size="12" tabindex="36" name="senha" type="password" value="&nbsp;<?php echo $row_usuario["senha"]; ?>"></p>
            <p>
                TIPO DE USUÁRIO: 
                ALUNO  <input type="radio"value="Aluno &nbsp;"<?php
                if ($row_usuario["id"] == 3.0) {
                    echo "checked";
                }
                ?> name="id">&nbsp;
                &nbsp;&nbsp;&nbsp;
                PROFESSOR  <input type="radio"value="Professor &nbsp;"<?php
                if ($row_usuario["id"] == 2.0) {
                    echo "checked";
                }
                ?> name="id">&nbsp;
                &nbsp;&nbsp;&nbsp;
                ADMINISTRADOR  <input type="radio"value="Administrador &nbsp;"<?php
                if ($row_usuario["id"] == 1.0) {
                    echo "checked";
                }
                ?> name="id">&nbsp;
                &nbsp;&nbsp;&nbsp;
            </p>
            <p id="botao">
                <input id="editenviar"type="submit" value="Enviar">
            </p>
        
</div>

<?php
$nome_aluno=$row_usuario["Nome_Aluno"];
?>
</form>
        <form class="pdf" action="pdf.php" method="POST">
          <input type="hidden" name="Nome" value="<?php echo $nome_aluno; ?>">
          <input type="hidden" name="Curso" value="<?php echo $curso; ?>">
<input type="submit" target="blank" value="Gerar PDF" />
</form>
</form>
        
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