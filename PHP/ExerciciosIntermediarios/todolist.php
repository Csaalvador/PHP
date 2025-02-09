<?php 

$db = mysqli_connect('localhost', 'root', 'todoList');

if(!isset($_POST['submit'])){
    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List do Cauã</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            font-family: 'Arial', sans-serif;
        }

        h3 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 350px;
            text-align: center;
        }

        input {
            width: 80%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input:focus {
            border-color: #ff7e5f;
            box-shadow: 0 0 5px rgba(255, 126, 95, 0.5);
        }

        button {
            padding: 10px 15px;
            background-color: #ff7e5f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #e76e4f;
        }

        button:active {
            transform: scale(0.98);
        }

    </style>
</head>
<body>
    <h3>Todo List</h3>
    <div class="container">
        <input type="text" placeholder="Digite sua tarefa aqui">
        <button>Adicionar Tarefa</button>
    </div>
</body>
</html>