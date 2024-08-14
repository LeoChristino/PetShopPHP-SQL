<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {

		//sanitização
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$especie = mysqli_escape_string($connection,$_POST['especie']);
		$sexo = mysqli_escape_string($connection,$_POST['sexo']);
		$raca = mysqli_escape_string($connection,$_POST['raca']);

		$sql = "INSERT INTO tbAnimal(nome,especie,sexo,raca)VALUES('$nome','$especie','$sexo','$raca')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
