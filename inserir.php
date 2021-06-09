<?php
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Cadastrar Produto</h3>
			
			<form action="php_action/inserir_produto.php" method="POST" enctype="multipart/form-data">
				</br>

				<div class="file-field input-field col s12">
      				<div class="btn-small green">
        				<span>Inserir Imagem</span>
        				<input type="file" name="imagem" id="imagem">
      				</div>
      				<div class="file-path-wrapper">
        				<input class="file-path validate" type="text">
      				</div>
    			</div>

				<div class="input-field col s12">
					<input type="text" name="descricao" id="descricao">
					<label for="descricao">Descrição</label>
				</div>
				
				<div class="input-field col s12">
					<input type="number" min="0" max="30" name="quantidade" id="quantidade">
					<label for="quantidade">Quantidade</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="preco" id="preco">
					<label for="preco">Preço</label>
				</div>

				<button type="submit" name="btn-inserir" class="btn-small green">Inserir</button>
				
				<a href="index.php" class="waves-effect waves-light btn btn-small">Listar Produtos</a>

			</form>

		</div>		
	</div>


<?php 
	

	include_once 'includes/footer.php';


 ?>