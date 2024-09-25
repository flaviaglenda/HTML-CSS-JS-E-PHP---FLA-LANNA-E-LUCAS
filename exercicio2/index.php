<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../exercicio2/pag.css">
    <title>Product Card</title>
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
    <div class="container">
        <div class="card">
            <div class="shoeBackground">
                <div class="gradients">
                    <div class="gradient second" color="blue"></div>
                    <div class="gradient" color="red"></div>
                    <div class="gradient" color="green"></div>
                    <div class="gradient" color="orange"></div>
                    <div class="gradient" color="black"></div>
                </div>
                <h1 class="nike">nike</h1>
                <img src="img/logo.png" alt="" class="logo">
                <a href="#" class="share"><i class="fas fa-share-alt"></i></a>

                <img src="img/blue.png" alt="" class="shoe show" color="blue">
                <img src="img/red.png" alt="" class="shoe" color="red">
                <img src="img/green.png" alt="" class="shoe" color="green">
                <img src="img/orange.png" alt="" class="shoe" color="orange">
                <img src="img/black.png" alt="" class="shoe" color="black">

            </div>
            <div class="info">
                <div class="shoeName">
                    <div>
                        <h1 class="big">Nike Zoom KD 12</h1>
                        <span class="new">new</span>
                    </div>
                    <h3 class="small">Men's running shoes</h3>
                </div>
                <div class="description">
                    <h3 class="title">Product Info</h3>
                    <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
                </div>
                <div class="color-container">
                    <h3 class="title">Color</h3>
                    <div class="colors">
                        <span class="color active" primary="#2175f5" color="blue"></span>
                        <span class="color" primary="#f84848" color="red"></span>
                        <span class="color" primary="#29b864" color="green"></span>
                        <span class="color" primary="#ff5521" color="orange"></span>
                        <span class="color" primary="#444" color="black"></span>
                    </div>
                </div>
                <div class="size-container">
                    <h3 class="title">size</h3>
                    <div class="sizes">
                        <span class="size">7</span>
                        <span class="size">8</span>
                        <span class="size active">9</span>
                        <span class="size">10</span>
                        <span class="size">11</span>
                    </div>
                </div>
                <div class="buy-price">
    <form action="../exercicio2/fed.php" method="POST">
        <button type="submit" class="buy">
            <i class="fas fa-shopping-cart"></i> Add to cart
        </button>
    </form>
    <div class="price">
        <i class="fas fa-dollar-sign"></i>
        <h1>189.99</h1>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="../exercicio2/main.js"></script>
  
</body>
</html>