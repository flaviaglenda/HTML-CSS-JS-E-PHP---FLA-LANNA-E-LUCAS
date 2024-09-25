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
    <title>Reserva Confirmada</title>
</head>
<body>
<nav class="navbar"></nav>
        <ul>
            <li><a href="../exercicio1/cadastrar.php">Home</a></li>
            <li><a href="../exercicio1/form.php">Exercício 1</a></li>
            <li><a href="../exercicio2/index.php">Exercício 2</a></li>
            <li><a href="../exercicio3/reserva.php">Exercício 3</a></li>
        </ul>
    </nav>
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
