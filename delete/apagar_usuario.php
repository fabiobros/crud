<?php
session_start();
include_once("../conexao/conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id)){
	$result_usuario = "DELETE FROM pessoa WHERE id='$id'";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Dado apagado apagado com sucesso</p>";
		header("Location: ../mostrar/listar.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro, dado  não deletado</p>";
		header("Location: ../mostrar/listar.php");
	}
}else{	
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: ../mostrar/listar.php");
}
