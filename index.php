<?php

    include 'conexao.php';
    $sql = "SELECT * FROM aluno";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $alunos = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="inserir.php">
        Nome: <input type="text" name="nome">
        Idade: <input type="number" name="idade">
        <input type="submit" value="Salvar">
    </form>

    <br>

    <table border="1" width="100%">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <td><?php echo $aluno['nome'] ?></td>
                <td><?php echo $aluno['idade'] ?></td>
                <td>
                    <a href="excluir.php?id=<?php echo $aluno['id'] ?>">Excluir</a>
                </td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>