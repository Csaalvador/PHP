<?php
$host = "localhost";
$dbname = "testes";
$user = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Inserção de dados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"], $_POST["password"])) {
    $name = $_POST["name"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Criptografa a senha

    $sql = "INSERT INTO usuarios (name, password) VALUES (:name, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}

// Consulta de usuários cadastrados
$usuarios = $pdo->query("SELECT * FROM usuarios")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form action="" method="POST">
        <label for="name">Nome</label>
        <input type="text" name="name" required>

        <label for="password">Senha</label>
        <input type="password" name="password" required>

        <button type="submit">Cadastrar</button>
    </form>

    <h2>Usuários Cadastrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario["id"] ?></td>
            <td><?= $usuario["name"] ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario["id"] ?>">Editar</a>
                <a href="deletar.php?id=<?= $usuario["id"] ?>" onclick="return confirm('Tem certeza que deseja excluir?')">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
