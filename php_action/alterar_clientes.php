<?php
require_once 'php_action/conexao_bd.php';

$codAnimal = $_POST['codAnimal'];

// Update the database record
$sql = "UPDATE tbAnimal SET nome = ?, especie = ?, sexo = ?, raca = ?, cor = ?, nascimento = ? WHERE codAnimal = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("sssssss", $nome, $especie, $sexo, $raca, $cor, $nascimento, $codAnimal);

// Get the new values from the form submission
$nome = $_POST['nome'];
$especie = $_POST['especie'];
$sexo = $_POST['sexo'];
$raca = $_POST['raca'];
$cor = $_POST['cor'];
$nascimento = $_POST['nascimento'];

$stmt->execute();

// Redirect the user back to the original page
header('Location: index.php');
exit;