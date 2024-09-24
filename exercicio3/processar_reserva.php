<?php
$nome = $data = $hora = $sala = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; 
    $data = $_POST['date'];
    $hora = $_POST['hora-cons'];
    $sala = $_POST['select'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserva.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <script src="../exercicio3/main.js" defer></script>
    <title>Reserva Confirmada</title>
</head>
<body>
    <div class="container">
        <h1>Reserva Confirmada</h1>
        <div id="reservaInfo" class="reserva-info"></div> 
    </div>

    <script>
        const reservaDados = {
            nome: "<?php echo $nome; ?>",
            data: "<?php echo $data; ?>",
            hora: "<?php echo $hora; ?>",
            sala: "<?php echo $sala; ?>"
        };

        exibirReserva(reservaDados);
    </script>
</body>
</html>

