<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$quantidade = mysqli_escape_string($connection,$_POST['quantidade']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);
		$codigo = mysqli_escape_string($connection,$_POST['codigo']);

		$sql = "UPDATE tbProdutos SET descricao = '$descricao', quantidade = '$quantidade', valor = '$preco' WHERE codigo = '$codigo'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
