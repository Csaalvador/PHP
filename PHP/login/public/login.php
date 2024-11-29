<?php 
// Inicia a sessão
session_start();


// Definir constante para controle de acesso
defined('CONTROL') or die('Acesso negado');

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica se usuário e senha foram submetidos
    $usuario = $_POST['usuario'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $erro = null;

    if (empty($usuario) || empty($senha)) {
        $erro = "Usuário e senha obrigatórios";
    }

    $usuarios = require_once __DIR__ . '/../inc/usuarios.php';

    foreach ($usuarios as $user) {
        if ($user['usuarios'] == $usuario && password_verify($senha, $user['senha'])) {
            // Efetua o login
            $_SESSION['usuario'] = $usuario;

            header('Location: index.php?rota=home');
            exit;
        }
    }

    $erro = "Usuário e/ou senha inválidos";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php?rota=login" method="post">
        <div>
            <label for="usuario">Usuário</label>
            <input type="text" name="usuario" id="usuario" value="<?= htmlspecialchars($usuario ?? '') ?>">
        </div>

        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha">
        </div>
        
        <button type="submit">Entrar</button>
    </form>

    <?php if (!empty($erro)): ?>
        <p style="color: red;"><?= htmlspecialchars($erro) ?></p>
    <?php endif; ?>
</body>
</html>
