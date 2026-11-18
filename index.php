<?php

    session_start();
    if(!(empty($_SESSION) || $_SESSION['logado'] == false)) {
        header('Location:/exemplo/aluno/index.php');
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
        Usuário: <input type="text" name="usuario">
        Senha: <input type="password" name="senha">
        <input type="submit" value="Entrar">
        <input type="reset" value="Limpar">
    </form>

</body>
</html>