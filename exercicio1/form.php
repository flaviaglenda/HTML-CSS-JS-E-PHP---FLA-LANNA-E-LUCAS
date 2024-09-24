<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['user-name'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];


    }
    else {

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
            <form method="post" action="" id="fundo">
                <h2>Cadastro do Cliente:</h2>
                <div class="formulario">
                    <label for="user-name">Nome:</label>
                    <input type="text" id="user-name" name="user-name" value="user-name" required>
                </div>
                <div class="formulario">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value="email" required>
                </div>
                <div class="formulario">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telephone" name="telephone" value="telephone" required>
                </div>
                <div>
                    <button id="entrar">Entrar</button>  
                </div>
            </form>
    </div >
</body>
</html>