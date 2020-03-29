<?php
session_start();
include_once('conexao.php');
$id_jogadores = filter_input(INPUT_GET, 'id_jogadores', FILTER_SANITIZE_NUMBER_INT);
if(!empty($id_jogadores)){
	$result_jogadores = "DELETE FROM tb_jogadores WHERE id_jogadores='$id_jogadores'";
	$resultado_jogadores = mysqli_query($conn, $result_jogadores);
	if(mysqli_affected_rows($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário apagado com sucesso</p>";
		header("Location: index.php");
	}else{
		
		$_SESSION['msg'] = "<p style='color:red;'>Erro o usuário não foi apagado com sucesso</p>";
		header("Location: index.php");
	}
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Necessário selecionar um usuário</p>";
	header("Location: index.php");
}