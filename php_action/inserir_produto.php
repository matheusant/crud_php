<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-inserir'])) {

		$arquivo = $_FILES['imagem']['name'];
    	$extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));
    
    	$novo_nome = md5(time()).".".$extensao;
    
    	$diretorio = "images/";
    
    	move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio . $novo_nome);
		
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$quantidade = mysqli_escape_string($connection,$_POST['quantidade']);
		$preco = mysqli_escape_string($connection,$_POST['preco']);

		$sql = "INSERT INTO tbProdutos(imagem,descricao,quantidade,valor,data)VALUES('$novo_nome','$descricao',$quantidade,'$preco',NOW())";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Inserido com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao inserir.";

			header('Location: ../index.php');	
		}
	}
