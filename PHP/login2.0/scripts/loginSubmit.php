<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: index.php?rota=login');
    exit;
}

$usuario = $_POST['textUsuario'] ?? null;
$senha = $_POST['textSenha'] ?? null;

if (empty($usuario) || empty($senha)) {
    $_SESSION['error'] = "Por favor, preencha todos os campos.";
    header('location: index.php?rota=login');
    exit;
}

$db = new Database();
$params = [
    'usuario' => $usuario
];
$sql = "SELECT * FROM usuarios WHERE usuario = :usuario";

$result = $db->query($sql, $params);

if ($result['status'] == 'error') {
    $_SESSION['error'] = "Erro ao acessar o banco de dados.";
    header('location: index.php?rota=404');
    exit;
}

if (count($result['data']) == 0) {
    $_SESSION['error'] = "Usuário ou senha inválidos";
    header('location: index.php?rota=login');
    exit;
}

var_dump($senha);  // Exibe a senha fornecida
var_dump($result['data'][0]->senha);  // Exibe a senha armazenada no banco de dados


// Se tudo estiver certo, cria a sessão do usuário
$_SESSION['usuario'] = $result['data'][0];
header('location: index.php?rota=home');
exit;
