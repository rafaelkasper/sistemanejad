<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="../../imagens/favicon.ico" rel="shortcut icon" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="../../css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="../../css/navbar.css" />
        <link rel="stylesheet" type="text/css" href="../../css/abas.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <script src="../../js/abas.js"></script>


        <link href="../../css/bootstrap3.css" rel="stylesheet" id="bootstrap-css">
        <script src="../../js/bootstrap3.js"></script>
        <script src="../../js/jquery_form.js"></script>
    </head>
    <header>

        <nav class="topnav" id="myTopnav">

            <a href="../admin.php">HOME</a>
            <a href="agenda_admin.php">AGENDA</a>
            <a href="registrar_nota_apostila.php">LANÇAR NOTAS</a>
            <a href="consultar_notas_apostila.php">CONSULTAR NOTAS</a>
            <a href="lancar_orientacao.php">LANÇAR ORIENTAÇÃO</a>
            <a href="consultar_orientacao.php">CONSULTAR ORIENTAÇÃO</a>
            <--!<a style="float:right"href=""><?php //echo "Usuário: " . $nome     ?></a>-->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>

            <a style="float:right" href="../../functions/logout.php">SAIR&nbsp;<img id="sair" src="../../imagens/sair.png" width="20" height="20"></a>

        </nav>

    </header>
    <body>
        <div class="container">

            <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-md-4">
                        <a href="#step-1" type="button" class="btn btn-primary btn-circle"><img class="img_form" src="../../imagens/cadastrar.png" width="50" height="50" alt="matricula"/></a>
                        <p>DADOS CADASTRAIS</p>
                    </div>
                    <div class="stepwizard-step col-md-4">
                        <a href="#step-2" type="button" class="btn btn-default btn-circle"><img class="img_form" src="../../imagens/documentos.png" width="50" height="50" alt="documentos"/></a>
                        <p>DOCUMENTAÇÃO</p>
                    </div>
                    <div class="stepwizard-step col-md-4">
                        <a href="#step-3" type="button" class="btn btn-default btn-circle"><img class="img_form" src="../../imagens/contato.png" width="50" height="50" alt="contato"/></a>
                        <p>CONTATOS</p>
                    </div>
                </div>
            </div>

            <form action="matricula_apostila.php" method="POST" role="form" >
                <div class="row setup-content" id="step-1">
                    <div class="col-md-12">
                        <div class="col-md-12">
                           

                            <br>
                            <div class="form-group col-md-12">
                                <div class="form-check form-check-inline">
                                    <input type="radio" value="Ensino Fundamental" name="Curso" required="required">&nbsp;&nbsp;
                                    <label> &nbsp;&nbsp;ENSINO FUNDAMENTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <input  type="radio"value="Ensino Médio" name="Curso" required="required">&nbsp;&nbsp;
                                    <label>&nbsp;&nbsp;ENSINO MÉDIO</label>
                                </div>
                                
                            </div>


                            <div class="form-group col-md-6">
                                <label>NOME:</label>
                                <input class="caixa" maxlength="50" size="50" tabindex="1" name="Nome_Aluno" required="required">&nbsp;&nbsp;
                            </div>
                            <div class="form-group col-md-6">
                                <label>DATA DE NASCIMENTO:</label>
                                <input class="caixa" maxlength="10" size="10" tabindex="2" type="date" name="Data_Nascimento">
                            </div>


                            <div class="form-group col-md-6">
                                <div class="form-check form-check-inline">
                                    <label>  GÊNERO: </label>
                                    <input type="radio"value="Masculino" name="Sexo">    <label>Masculino&nbsp; </label>
                                    <input type="radio"value="Feminino" name="Sexo">   <label> Feminino&nbsp; </label>
                                    <input type="radio"value="outro" name="Sexo">   <label>Outro </label>
                                </div>
                            </div>


                           <div class="form-group col-md-6">
                                <div class="form-check form-check-inline">
                                    <label>ESTADO CIVIL:</label>
                                    <input type="radio"value="casado" name="Estado_Civil">  <label> Casado(a)&nbsp; </label>
                                    <input type="radio"value="divorciado" name="Estado_Civil">  <label> Divorciado(a)&nbsp; </label>
                                    <input type="radio"value="solteiro" name="Estado_Civil">   <label>Solteiro(a)&nbsp; </label>
                                    <input type="radio"value="outro" name="Estado_Civil">   <label>Outro </label>
                                </div>
                            </div>


                            <div class="form-group col-md-4">
                                <label>NATURALIDADE:</label>
                                <input class="caixa" maxlength="30" size="20" tabindex="5" name="Naturalidade"> &nbsp;&nbsp;&nbsp;
                            </div>


                            <div class="form-group col-md-2">
                                <label>UF:</label>
                                <input class="caixa" maxlength="2" size="2" tabindex="6" name="UF" >&nbsp;&nbsp;
                            </div>


                            <div class="form-group col-md-4">
                                <label>NACIONALIDADE:</label>
                                <input class="caixa" maxlength="20" size="20" tabindex="7" name="Nacionalidade" ></p>
                            </div>


                            <div class="form-group col-md-6">
                                <label>NOME DO PAI:</label>
                                <input class="caixa" maxlength="40" size=50" tabindex="8" name="Nome_Pai">&nbsp;
                            </div>


                            <div class="form-group col-md-6">
                                <label>NOME DA MÃE:</label>
                                <input class="caixa" maxlength="40" size="50" tabindex="9" name="nome_mae"></p>

                            </div>
                            <div>
                               
                            </div>
                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >PRÓXIMO</button>

                        </div>

                    </div>
                </div>
                <br>





                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <div class="col-md-12">

                          

                            <div class="form-group col-md-3">         
                                <label>RG:</label>
                                <input autofocus="enable" class="caixa" maxlength="12" size="12" tabindex="10" name="Identidade">&nbsp;&nbsp;&nbsp;
                            </div>      

                            <div class="form-group col-md-4">
                                <label> ÓRGÃO EXPEDIDOR:</label>
                                <input class="caixa" maxlength="12" size="12" tabindex="11" name="orgao" >
                            </div>

                            <div class="form-group col-md-2">
                                <label>UF:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="2" size="2" tabindex="12" name="uf_rg"> 
                            </div>

                            <div class="form-group col-md-3">
                                <label>EMISSÃO:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="10" size="10" tabindex="13" name="Data_Expedicao">
                            </div>

                            <div class="form-group col-md-3">
                                <label> CPF:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="14" size="14" tabindex="16" name="CPF" >&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-3">
                                <label>CNH:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="14" size="14" tabindex="17" name="CNH">&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-6">
                                <label>CARTEIRA DE TRABALHO:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="14" size="14" tabindex="18" name="carteiratrabalho" >
                            </div>        

                            <div class="form-group col-md-5">
                                <label> TÍTULO DE ELEITOR:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="14" size="14" tabindex="19" name="Titulo_Eleitor">
                            </div>

                            <div class="form-group col-md-3">
                                <label> ZONA:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="8" size="8" tabindex="20" name="Zona">
                            </div>

                            <div class="form-group col-md-4">
                                <label>SESSÃO:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="8" size="8" tabindex="21" name="Secao">
                            </div>



                            <div class="form-group col-md-12">
                                <label> NÚMERO CERTIDÃO DE NASCIMENTO:&nbsp;</label>
                                <input class="caixa" maxlength="12" size="12" tabindex="22" name="certidao_nascimento">&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-4">
                                <label> EXPEDIDOR:&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="12" size="20" tabindex="23" name="cartorio_certidao_nasc">&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-3">
                                <label> FOLHA:&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="12" size="12" tabindex="24" name="folha_certidao_nasc">&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-3">
                                <label>  LIVRO:&nbsp;</label>
                                <input class="caixa" maxlength="12" size="12" tabindex="25" name="livro_certidao_nasc">
                            </div>


                            <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >PRÓXIMO</button>
                            <br>
                        </div>
                    </div>
                   
                </div>


                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            


                            <div class="form-group col-md-6">
                                <label>ENDEREÇO:&nbsp;&nbsp;&nbsp;</label>
                                <input autofocus="enable" class="caixa" maxlength="50" size="50" tabindex="26" name="Endereco">&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-4">
                                <label>COMPL.:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="20" size="20" tabindex="27" name="complemento">
                            </div>

                            <div class="form-group col-md-2">
                                <label>CEP:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="9" size="9" tabindex="28" name="CEP">
                            </div>

                            <div class="form-group col-md-4">
                                <label>BAIRRO:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="40" size="30" tabindex="29" name="Bairro">&nbsp;&nbsp;&nbsp;
                            </div>

                            <div class="form-group col-md-5">
                                <label>CIDADE:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="40" size="40" tabindex="30" name="Cidade">
                            </div>

                            <div class="form-group col-md-3">
                                <label>ESTADO:&nbsp;&nbsp;&nbsp;</label>
                                <input class="caixa" maxlength="2" size="2" tabindex="31" name="UF">&nbsp;&nbsp;&nbsp;
                            </div>

                           
                            <div class="form-group col-md-12">
                                <label>TELEFONE CELULAR:</label>
                                <input type="tel" class="caixa" maxlength="18" size="12" tabindex="32" name="nro_celular"> 
                            </div>


                            <div class="form-group col-md-12">
                                <label>TELEFONE RESIDENCIAL:&nbsp;&nbsp;&nbsp;</label>
                                <input type="tel" class="caixa" maxlength="18" size="18" tabindex="33" name="Telefone_Residencial" >&nbsp;&nbsp;&nbsp;

                                <label>TELEFONE RECADO:&nbsp;&nbsp;&nbsp;</label>
                                <input type="tel" class="caixa" maxlength="18" size="18" tabindex="34" name="Telefone_Recado">
                            </div>            
                           



                            <div class="form-group col-md-12">
                              
                                <button class="btn btn-success btn-lg pull-right" type="submit">ENVIAR</button>

                            </div>


                        </div>
                    </div>
                </div>
                <br>

            </form>
        </div>

        <script>
            $(document).ready(function () {

                var navListItems = $('div.setup-panel div a'),
                        allWells = $('.setup-content'),
                        allNextBtn = $('.nextBtn');

                allWells.hide();

                navListItems.click(function (e) {
                    e.preventDefault();
                    var $target = $($(this).attr('href')),
                            $item = $(this);

                    if (!$item.hasClass('disabled')) {
                        navListItems.removeClass('btn-primary').addClass('btn-default');
                        $item.addClass('btn-primary');
                        allWells.hide();
                        $target.show();
                        $target.find('input:eq(0)').focus();
                    }
                });

                allNextBtn.click(function () {
                    var curStep = $(this).closest(".setup-content"),
                            curStepBtn = curStep.attr("id"),
                            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                            curInputs = curStep.find("input[type='text'],input[type='url']"),
                            isValid = true;

                    $(".form-group").removeClass("has-error");
                    for (var i = 0; i < curInputs.length; i++) {
                        if (!curInputs[i].validity.valid) {
                            isValid = false;
                            $(curInputs[i]).closest(".form-group").addClass("has-error");
                        }
                    }

                    if (isValid)
                        nextStepWizard.removeAttr('disabled').trigger('click');
                });

                $('div.setup-panel div a.btn-primary').trigger('click');
            });
        </script>
    </body>
</html>