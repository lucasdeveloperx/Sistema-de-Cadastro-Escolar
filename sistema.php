<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['cpf']) == true))
    {
        unset($_SESSION ['nome']);
        unset($_SESSION ['cpf']);
        header('Location: login.php');
    }

    $logado = $_SESSION['nome'];
    $cpf = $_SESSION['cpf'];
    $sql = "SELECT * FROM eeepcadastros ORDER BY id DESC";
    $result = $conexao->query($sql);



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca EEEP</title>
    <link rel="stylesheet" href="/css/pagina.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <nav class="nav-bar">
            <div class="logo">
                <h1>Biblioteca EEEP</h1>
            </div>


            <div class="nav-list">
                <ul>
                    <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Livros</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
                </ul>
            </div>


            <div class="login-button"></div>
                <button>        <a href="sair.php" class="btn-sair">Sair</a></button>
    </nav>
</header>

</body>
</html>

    


<body>
<br>
<?php

echo "<h1>Bem Vindo $logado!<h1>"

?>



</body>

</html>