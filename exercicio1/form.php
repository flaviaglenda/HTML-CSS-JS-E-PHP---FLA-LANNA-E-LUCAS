<!-- Flávia, Lanna e Lucas -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['user-name'];
        $email = $_POST['email'];
        $telefone = $_POST['telephone'];

        // Aqui você pode processar os dados, como salvar em um banco de dados ou enviar um e-mail.
    } else {
        // Se necessário, você pode adicionar um código para tratar o caso de acesso via GET
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js"></script>
    <link rel="stylesheet" href="../exercicio1/style.css"> <!-- Link para o CSS externo -->
    <title>Cadastro de Cliente</title>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="../exercicio1/cadastrar.php">Home</a></li>
            <li><a href="../exercicio1/form.php">Exercício 1</a></li>
            <li><a href="../exercicio2/index.php">Exercício 2</a></li>
            <li><a href="../exercicio3/reserva.php">Exercício 3</a></li>
        </ul>
    </nav>

    <div class="area">
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
                <input type="text" id="user-name" name="user-name" required>
            </div>
            <div class="formulario">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="formulario">
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telephone" name="telephone" required>
            </div>
            <div>
                <button type="submit" id="entrar">Cadastrar</button>  
            </div>
        </form>
    </div>
</body>
</html>
