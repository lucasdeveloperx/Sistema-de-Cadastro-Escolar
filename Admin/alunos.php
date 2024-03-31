<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['cpf']) == true))
    {
        unset($_SESSION ['nome']);
        unset($_SESSION ['cpf']);
        header('Location: login-admin.php');
    }

    $logado = $_SESSION['nome'];
    $cpf = $_SESSION['cpf'];
    $sql = "SELECT * FROM eeepcadastro ORDER BY id DESC";
    $result = $conexao->query($sql);



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="/css/admin/alunos2.css">
      <title>Sistema EEEP</title>
</head>

<header>
    <nav class="nav-bar">
            <div class="logo">
                <h1>Biblioteca EEEP</h1>
            </div>


            <div class="nav-list">
                <ul>
                <li class="nav-item"><a href="sistema.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="alunos.php" class="nav-link">Alunos</a></li>
                    <li class="nav-item"><a href="cadastro.php" class="nav-link">Cadastrar</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Monitoramento</a></li>
                </ul>
            </div>


            <div class="login-button"></div>
                <button><a href="sair.php">Sair</a></button>
    </nav>
</header>

    


<body>
<br>
<?php

echo "<h1>Tabela de alunos cadastrados<h1>"

?>

<div class="tabela">
        <table class="table">
        <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Matrícula</th>
                <th scope="col">E-mail</th>
                <th scope="col">Curso</th>
                <th scope="col">Série</th>
                <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['cpf']."</td>";
                    echo "<td>".$user_data['matricula']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['curso']."</td>";
                    echo "<td>".$user_data['serie']."</td>";
                }


            ?>
        </tbody>
        </table>
</div>


</body>

</html>