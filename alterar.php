<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tbAnimal WHERE codAnimal = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);



	}



?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar cliente</h3>
			
			<form action="php_action/alterar_clientes.php" method="POST">

				<input type="hidden" name = "codAnimal" value="<?php echo $dados['codAnimal']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="especie" id="especie" value="<?php echo $dados['especie']; ?>"
					>
					<label for="especie">Especie</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="sexo" id="sexo" value="<?php echo $dados['sexo']; ?>">
					<label for="sexo">Sexo</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="raca" id="raca" value="<?php echo $dados['raca']; ?>">
					<label for="raca">Raçcaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn">Alterar</button>
				
				<a href="index.php" class="btn green">Lista de clientes</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


 ?>