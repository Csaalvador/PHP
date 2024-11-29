<?php
defined('CONTROL') or die('Acesso negado');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo a aplicação</h1>
    <hr>
    <span>Usuário: <strong><?= $_SESSION['usuario'] ?></strong></span>

    <span>
        <a href="?rota=logout">Sair</a>
    </span>
</body>
</html>
