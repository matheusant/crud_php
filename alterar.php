<?php 
	include_once 'php_action/conexao_bd.php';

	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbProdutos WHERE codigo = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar Produto</h3>
			
			<form action="php_action/alterar_produto.php" method="POST">

				<input type="hidden" name = "codigo" value="<?php echo $dados['codigo']; ?>">

				<div class="file-field input-field col s12">
      				<div class="btn-small green">
        				<span>Função em desenvolvimento!!!</span>
        				<input type="file" name="imagem" id="imagem">
      				</div>
      				<div class="file-path-wrapper">
        				<input class="file-path validate" type="text">
      				</div>
    			</div>
				
				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao" value="<?php echo $dados['descricao']; ?>">
					<label for="descricao">Descrição</label>
				</div>
				
				<div class="input-field col s12">
					<input type="number" min="0" name="quantidade" id="quantidade" value="<?php echo $dados['quantidade']; ?>"
					>
					<label for="quantidade">Quantidade</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco" value="<?php echo $dados['valor']; ?>">
					<label for="preco">Preço</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn-small green">Alterar</button>
				
				<a href="index.php" class="waves-effect waves-light btn btn-small">Listar Jogos</a>

			</form>

		</div>		
	</div>


<?php 
	include_once 'includes/footer.php';


 ?>