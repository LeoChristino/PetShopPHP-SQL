<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$especie = mysqli_escape_string($connection,$_POST['especie']);
		$sexo = mysqli_escape_string($connection,$_POST['sexo']);
		$raca = mysqli_escape_string($connection,$_POST['raca']);
		$codAnimal = mysqli_escape_string($connection,$_POST['codAnimal']);

		$sql = "UPDATE tbAnimal SET nome = '$nome', especie = '$especie', sexo = '$sexo', raca = '$raca' WHERE codAnimal = '$codAnimal'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}
