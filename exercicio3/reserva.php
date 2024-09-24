<!-- reserva.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserva.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- SweetAlert CDN -->
    <script src="confirmacao.js" defer></script>
    <title>Reserva de Sala</title>
</head>
<body>
    <div class="container">
        <h1>Reserva de Sala de Reunião</h1>
        <form id="reservaForm" method="POST" action="processar_reserva.php">
            <label for="nome">Nome do Solicitante:</label>
            <input type="text" name="nome" required>
            <label for="input-date">Data:</label>
            <input type="date" name="date" id="input-date" required>
            <label for="hora-cons">Horário da Reunião:</label>
            <input id="hora-cons" type="time" name="hora-cons" required>
            <label for="select">Solicite uma Sala:</label>
            <select name="select" required>
                <option value="">Escolha uma opção</option>
                <option value="sala1">Sala de Reunião 01</option>
                <option value="sala2">Sala de Reunião 02</option>
                <option value="sala3">Sala de Reunião 03</option>
                <option value="sala4">Sala de Reunião 04</option>
                <option value="sala5">Sala de Reunião 05</option>
                <option value="sala6">Sala de Reunião 06</option>
                <option value="sala7">Escritório 07</option>
                <option value="sala8">Escritório 08</option>
                <option value="sala9">Escritório 09</option>
                <option value="sala10">Escritório 10</option>
            </select>
            <button type="submit">Reservar</button>
        </form>
    </div>
</body>
</html>
