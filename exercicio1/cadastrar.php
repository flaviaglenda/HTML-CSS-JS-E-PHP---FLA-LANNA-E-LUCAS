<!-- Flávia, Lanna e Lucas -->
 <div id="dados">
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $nome = $_POST['user-name'];
            $email = $_POST['email'];
            $telefone = $_POST['telephone'];

            echo "<h1>Dados do Cliente Cadastrado:</h1>";
            echo "<p><strong>Nome:</strong> " . htmlspecialchars($nome) . "</p>";
            echo "<p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Telefone:</strong> " . htmlspecialchars($telefone) . "</p>";
        } 
        
        else {
            echo "<h1>Erro: O formulário não foi enviado corretamente.</h1>";
        }
    ?>
 </div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="main.js"></script>
    <link rel="stylesheet" href="../exercicio1/style.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="../exercicio1/form.php">Exercício 1</a></li>
            <li><a href="../exercicio2/index.php">Exercício 2</a></li>
            <li><a href="../exercicio3/reserva.php">Exercício 3</a></li>
        </ul>
    </nav>
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
</body>
</html>