<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Cpf: ' . $_POST['cpf']);
        // print_r('<br>');
        // print_r('Matricula: ' . $_POST['matricula']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Curso: ' . $_POST['curso']);
        // print_r('<br>');
        // print_r('Serie: ' . $_POST['serie']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $matricula = $_POST['matricula'];
        $email = $_POST['email'];
        $curso = $_POST['curso'];
        $serie = $_POST['serie'];
        
        $result = mysqli_query($conexao, "INSERT INTO eeepcadastro(nome,cpf,matricula,email,curso,serie) 
        VALUES ('$nome','$cpf','$matricula','$email','$curso','$serie')");

        header('Location: cadastro.php');

    }

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
    <title>Cadastro EEEP</title>
      <!-- GOOGLE FONTS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin/style3.css">
</head>
<body>
    
    

    <div>
        <h1>Inscrição do Aluno</h1>
        <form action="cadastro.php" method="POST">
        <input type="text" name="nome" id="nome" placeholder="Nome" required>
        <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
        <br><br>
        <input type="text" name="matricula" id="matricula" placeholder="Matrícula" required>
        <input type="text" name="email" id="email" placeholder="E-mail" required>
        <br><br>
        <input type="text" name="curso" id="curso" placeholder="Curso" required>
        <input type="text" name="serie" id="serie" placeholder="Série" required>
        <br><br>
        <input type="submit" name="submit" id="submit" >
        <input class="butao" type="button" value="Voltar para o sistema" onclick="window.location.href='sistema.php'">

        </form>
    </div>

</body>
</html>