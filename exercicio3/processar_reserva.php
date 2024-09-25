<?php
$nome = $_POST['nome'];
$data = $_POST['date'];
$hora = $_POST['hora-cons'];
$sala = $_POST['select'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <link rel="stylesheet" href="../exercicio3/reserva.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <title>Reserva Confirmada</title>
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
            <div class="confirmation-message">
        <h1>Sua sala foi reservada!</h1>
        <h3>Aqui estão as informações: </h3>
        <div class="reservation-info">
                <p><strong>Nome:</strong> <?php echo $nome; ?></p>
                <p><strong>Data:</strong> <?php echo $data; ?></p>
                <p><strong>Hora:</strong> <?php echo $hora; ?></p>
                <p><strong>Sala:</strong> <?php echo $sala; ?></p>
            </div>
       
    </div>
</div>
</div>
    <script>
        const nome = "<?php echo $nome; ?>";
        const data = "<?php echo $data; ?>";
        const hora = "<?php echo $hora; ?>";
        const sala = "<?php echo $sala; ?>";

        Swal.fire({
            title: 'Reserva Confirmada!',
            html: `
                <p><strong>Nome:</strong> ${nome}</p>
                <p><strong>Data:</strong> ${data}</p>
                <p><strong>Hora:</strong> ${hora}</p>
                <p><strong>Sala:</strong> ${sala}</p>
            `,
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
</body>
</html>
