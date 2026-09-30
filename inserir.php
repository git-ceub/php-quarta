<?php

    include 'conexao.php';

    // Recuperando as informações do formulário
    $nome = $_GET['nome'];
    $idade = $_GET['idade'];

    // Execução SQL de Inserção
    $sql = " INSERT INTO aluno (nome, idade) VALUES ('$nome', $idade);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    header("Location: index.php");

?>