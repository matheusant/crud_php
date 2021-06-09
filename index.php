<?php 
	$url = "http://192.168.15.28/crud_api/v1/Api.php?apicall=getjogo"; 
	$ch = curl_init($url); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
	$produtos = json_decode(curl_exec($ch));

	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';
?>

	<div class="row">
		<div class="col s12 m8 push-m2">
			<h3 class="light">Cadastro de Jogos</h3>
			<table class="striped">
			<thead>
				<tr>
					<th>Imagem Produto</th>
					<th>Descrição</th>
					<th>Quantidade</th>
					<th>Preço</th>
					<th>Data de Entrada</th>
				</tr>				
			</thead>
			
			<tbody>
				<?php 

					if(count($produtos->produtos)) {
      				$i = 0;
      				foreach($produtos->produtos as $Produtos) {
      				$i++;

					?>				
					<?php if($i % 3 == 1) { ?>
					
							<?php } ?>
						<tr>
							<td><img class="responsive-img" src="php_action/images/<?=$Produtos->imagem?>" width="200rem" height="200rem"/></td>
							<td><?=$Produtos->descricao?></td>
							<td><?=$Produtos->quantidade?></td>
							<td><?=$Produtos->valor?></td>
							<td><?=$Produtos->data?></td>

							<td><a href="alterar.php?id=<?=$Produtos->codigo?>" class="btn-floating blue"><i class="material-icons">edit</i></a></td>

							<td><a href="#modal<?=$Produtos->codigo?>" class="btn-floating red modal-trigger"><i class="material-icons">delete_forever</i></a></td>

							<!-- Modal Structure in Materializecss -->
							  <div id="modal<?=$Produtos->codigo?>" class="modal">
							    <div class="modal-content">
							      <h3>Aviso!</h3>
							      <p>Excluir Jogo?</p>
							    </div>
							    <div class="modal-footer">
							      

							      <form action="php_action/excluir_produto.php" method="POST">
							      	<input type="hidden" name="codigo" value="<?=$Produtos->codigo?>">

							      	<button type="submit" name="btn-excluir" class="btn-floating red"><i class="material-icons left">check</i></button>

							      	<a href="#!" class="modal-close waves-effect green btn-floating"><i class="material-icons left">close</i></a>

							      </form>
							    </div>
							  </div>
							  
						</tr>
						<?php if($i % 3 == 0) { ?>
						<?php } } } ?>
						
					
			</tbody>

			</table>
			<br>
			
			

			<a href="inserir.php" class="btn green btn-large"><i class="material-icons left">add</i>Inserir Produto</a>
		</div>		
	</div>


<?php 
	


	include_once 'includes/footer.php';


 ?>