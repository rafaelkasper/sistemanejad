<?php

include '../../functions/valida_sessao_admin.php';
include "../../functions/conecta_banco.inc";
$matricula = ( isset($_POST['matricula']) ) ? $_POST['matricula'] : null;
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



if (!empty($matricula)) {
    $consulta = $con->query("UPDATE t_matricula SET Nome_Aluno = '$Nome_Aluno', data_nascimento = '$Data_Nascimento', Sexo = '$Sexo',  Naturalidade = '$Naturalidade',
Nacionalidade = '$Nacionalidade', Nome_Pai = '$Nome_Pai', nome_mae = '$nome_mae', Estado_Civil = '$Estado_Civil',  Identidade = '$Identidade', orgao = '$orgao', uf_rg = '$uf_rg', Data_Expedicao = '$Data_Expedicao', CPF = '$CPF', Titulo_Eleitor = '$Titulo_Eleitor',
Zona = $Zona', Secao = '$Secao', certidao_nascimento = '$certidao_nascimento', cartorio_certidao_nasc = '$cartorio_certidao_nasc', folha_certidao_nasc = '$folha_certidao_nasc',
livro_certidao_nasc = '$livro_certidao_nasc', Endereco = '$Endereco', CEP = '$CEP', Bairro = '$Bairro', Cidade = '$Cidade', Telefone_Residencial = '$Telefone_Residencial', nro_celular = '$nro_celular', 
Telefone_Recado = '$Telefone_Recado' WHERE matricula = '$matricula'");
    echo "<script>alert('Usuário alterado com sucesso')</script>";
}
?>

<meta http-equiv="refresh" content="0; url=consultar_matricula.php">;