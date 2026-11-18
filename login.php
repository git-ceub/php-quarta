<?php

    include 'conexao.php';

    $login = $_POST['usuario'];
    $senha = md5($_POST['senha']);

    $sql =  " SELECT * FROM usuario 
              WHERE login =:login AND 
                    senha =:senha ";
    
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":login", $login);
    $stmt->bindParam(":senha", $senha);
    $stmt->execute();

    $usuario = $stmt->fetch();

    session_start();
    if($usuario) {
        $_SESSION['logado'] = true;
        $_SESSION['login'] = $login;
        header("Location: /exemplo/aluno/index.php");
    } else {
        $_SESSION['logado'] = false;
        echo "Usuário ou senha inválidos";
    }

?>