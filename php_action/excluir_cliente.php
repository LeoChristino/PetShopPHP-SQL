<?php
session_start();
require_once 'conexao_bd.php';

if (isset($_POST['btn-excluir'])) {
    $codAnimal = mysqli_escape_string($connection, $_POST['codAnimal']);

    if ($connection) {
        $sql = "DELETE FROM tbAnimal WHERE codAnimal = '$codAnimal'";

        if (mysqli_query($connection, $sql)) {
            $_SESSION['mensagem'] = "Excluído com sucesso.";
            header('Location: ../index.php');
            exit;
        } else {
            $_SESSION['mensagem'] = "Erro ao excluir.";
            header('Location: ../index.php');
            exit;
        }
    } else {
        $_SESSION['mensagem'] = "Erro de conexão com o banco de dados.";
        header('Location: ../index.php');
        exit;
    }
}
?>