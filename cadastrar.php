<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Novo cliente</h3>
			
			<form action="php_action/criar_clientes.php" method="POST">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="especie" id="especie">
					<label for="especie">Espécie</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="sexo" id="sexo">
					<label for="sexo">Sexo</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="raca" id="raca">
					<label for="raca">Raça</label>
				</div>

				<button type="submit" name="btn-cadastrar" class="btn">Cadastrar</button>
				
				<a href="index.php" class="btn green">Lista de clientes</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>