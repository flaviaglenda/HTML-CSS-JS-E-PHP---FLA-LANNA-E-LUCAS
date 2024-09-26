<!-- Flávia, Lanna e Lucas -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="../index.html">Home</a></li>
            <li><a href="../exercicio1/form.php">Exercício 1</a></li>
            <li><a href="../exercicio2/index.php">Exercício 2</a></li>
            <li><a href="../exercicio3/reserva.php">Exercício 3</a></li>
        </ul>
    </nav>

        <form method="POST" action="cadastrar.php" id="formulario">
            <h2>Cadastro do Cliente:</h2>
            <div class="formulario">
                <label for="user-name">Nome:</label>
                <input type="text" id="user-name" name="user-name" placeholder="Insira seu nome:" required>
            </div>
            <div class="formulario">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="nome@email.com" required>
            </div>
            <div class="formulario">
                <label for="telephone">Telefone:</label>
                <input type="tel" id="telephone" name="telephone" placeholder="+XX XXXXX-XXXX" pattern="\+\d{1,3}\s\d{2}\s\d{5}-\d{4}" required>
            </div>
            <div>
                <button type="submit" id="entrar">Cadastrar</button>  
            </div>
        </form>
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