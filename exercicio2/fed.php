<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../exercicio2/ex2.css">
	<title>Form Reviews</title>
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
<div class="wrapper">
		<h3>Deixe seu Feedback!</h3>
		<form action="#">
			<div class="rating">
				<input type="number" name="rating" hidden>
				<i class='bx bx-star star' style="--i: 0;"></i>
				<i class='bx bx-star star' style="--i: 1;"></i>
				<i class='bx bx-star star' style="--i: 2;"></i>
				<i class='bx bx-star star' style="--i: 3;"></i>
				<i class='bx bx-star star' style="--i: 4;"></i>
			</div>
			<textarea name="opinion" cols="30" rows="5" placeholder="Sua avaliação..."></textarea>
			<div class="btn-group">
				<button type="submit" class="btn submit">Enviar</button>
				<button class="btn cancel">Cancelar</button>
			</div>
		</form>
	</div>
    <script src="../exercicio2/main.js"></script>
  
  
</body>
</html>