
<?php
session_start();

//Incluir conexao com BD
include "../../functions/conecta_banco.inc";
$id = $_GET['id'];


if(!empty($id)){
	
	
	$resultado_events = $con->query("DELETE FROM events WHERE id='$id'");

	//Verificar se alterou no banco de dados atravÃ©s "mysqli_affected_rows"
	if(mysqli_affected_rows($con)){
		$_SESSION['msg'] = "<div class='alert alert-success' role='alert'>O Evento foi excluído  com Sucesso<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda_admin.php");
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao excluir o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
		header("Location: agenda_admin.php");
	}
	
}else{
	$_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>Erro ao excluir o evento <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
	header("Location: agenda_admin.php");
}
