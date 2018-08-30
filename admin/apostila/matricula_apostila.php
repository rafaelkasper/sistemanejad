<?php

include '../../functions/valida_sessao_admin.php';
include "../../functions/conecta_banco.inc";
$Curso = ( isset($_POST['Curso']) ) ? $_POST['Curso'] : null;
$now = new DateTime();
$data = $now->format('d-m-y H:i:s');
$Nome_Aluno = ( isset($_POST['Nome_Aluno']) ) ? $_POST['Nome_Aluno'] : null;
$Data_Nascimento = ( isset($_POST['Data_Nascimento']) ) ? $_POST['Data_Nascimento'] : null;
$Sexo = ( isset($_POST['Sexo']) ) ? $_POST['Sexo'] : null;
$Estado_Civil = ( isset($_POST['Estado_Civil']) ) ? $_POST['Estado_Civil'] : null;
$Naturalidade = ( isset($_POST['Naturalidade']) ) ? $_POST['Naturalidade'] : null;
$Nacionalidade = ( isset($_POST['Nacionalidade']) ) ? $_POST['Nacionalidade'] : null;

$Nome_Pai = ( isset($_POST['Nome_Pai']) ) ? $_POST['Nome_Pai'] : null;
$nome_mae = ( isset($_POST['nome_mae']) ) ? $_POST['nome_mae'] : null;
$Identidade = ( isset($_POST['Identidade']) ) ? $_POST['Identidade'] : null;
$orgao = ( isset($_POST['orgao']) ) ? $_POST['orgao'] : null;
$uf_rg = ( isset($_POST['uf_rg']) ) ? $_POST['uf_rg'] : null;
$Data_Expedicao = ( isset($_POST['Data_Expedicao']) ) ? $_POST['Data_Expedicao'] : null;
$CPF = ( isset($_POST['CPF']) ) ? $_POST['CPF'] : null;

$Titulo_Eleitor = ( isset($_POST['Titulo_Eleitor']) ) ? $_POST['Titulo_Eleitor'] : null;
$Zona = ( isset($_POST['Zona']) ) ? $_POST['Zona'] : null;
$Secao = ( isset($_POST['Secao']) ) ? $_POST['Secao'] : null;
$certidao_nascimento = ( isset($_POST['certidao_nascimento']) ) ? $_POST['certidao_nascimento'] : null;
//$Certidão_Casamento = ( isset($_POST['Certidão_Casamento']) ) ? $_POST['Certidão_Casamento'] : null;
//$carteiratrabalho = ( isset($_POST['carteiratrabalho']) ) ? $_POST['carteiratrabalho'] : null;
$cartorio_certidao_nasc = ( isset($_POST['cartorio_certidao_nasc']) ) ? $_POST['cartorio_certidao_nasc'] : null;
$folha_certidao_nasc = ( isset($_POST['folha_certidao_nasc']) ) ? $_POST['folha_certidao_nasc'] : null;
$livro_certidao_nasc = ( isset($_POST['livro_certidao_nasc']) ) ? $_POST['livro_certidao_nasc'] : null;
$Endereco = ( isset($_POST['Endereco']) ) ? $_POST['Endereco'] : null;

$Bairro = ( isset($_POST['Bairro']) ) ? $_POST['Bairro'] : null;
$Cidade = ( isset($_POST['Cidade']) ) ? $_POST['Cidade'] : null;

$CEP = ( isset($_POST['CEP']) ) ? $_POST['CEP'] : null;
$Telefone_Residencial = ( isset($_POST['Telefone_Residencial']) ) ? $_POST['Telefone_Residencial'] : null;
$nro_celular = ( isset($_POST['nro_celular']) ) ? $_POST['nro_celular'] : null;
$Telefone_Recado = ( isset($_POST['Telefone_Recado']) ) ? $_POST['Telefone_Recado'] : null;
//$id = 3;
$_SESSION['aluno'] = $Nome_Aluno;
$cadastro = $con->query("INSERT INTO t_matricula (Curso, Nome_Aluno, data_nascimento, Sexo,  Naturalidade,
Nacionalidade, Nome_Pai, nome_mae, Estado_Civil,  Identidade, orgao, uf_rg, Data_Expedicao, CPF, Titulo_Eleitor,
Zona, Secao, certidao_nascimento, cartorio_certidao_nasc, folha_certidao_nasc,
livro_certidao_nasc, Endereco, CEP, Bairro, Cidade, Telefone_Residencial, nro_celular, 
Telefone_Recado) VALUES ('$Curso', '$Nome_Aluno','$Data_Nascimento','$Sexo', '$Naturalidade','$Nacionalidade', '$Nome_Pai','$nome_mae','$Estado_Civil', '$Identidade','$orgao','$uf_rg', '$Data_Expedicao','$CPF', '$Titulo_Eleitor', '$Zona','$Secao','$certidao_nascimento','$cartorio_certidao_nasc','$folha_certidao_nasc','$livro_certidao_nasc','$Endereco', '$CEP','$Bairro', '$Cidade','$Telefone_Residencial', '$nro_celular','$Telefone_Recado')");

//Verificar se salvou no banco de dados atravÃ©s "mysqli_insert_id" o qual verifica se existe o ID do Ãºltimo dado inserido
if (mysqli_insert_id($con)) {
    header("Location: curriculo.php");
} else {
header("Location: form_matricula.php");
}




$con->close();
