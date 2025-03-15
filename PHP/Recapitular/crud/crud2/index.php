<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "testes";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = trim($_POST['name']);
    $password = trim($_POST["password"]);


    if(!empty($name) && !empty($password)){
        try{
            $sql = "INSERT INTO usuarios (name, password) VALUES (:name, :password)";
            $stmt = $pdo->prepare($sql);

            $stmt->bindParam(":name", $name, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->execute();

        } catch (PDOException){
            echo "erro ao cadastrar";
        }
    }
}
?>


 

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <div>
            <label for="name">Nome:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</body>
</html>