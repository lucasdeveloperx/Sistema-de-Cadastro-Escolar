<?php
session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['nome']) && !empty($_POST['cpf']))
    {
        // Acessa Sistema
        include_once('config.php');
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];

        // print_r('Nome: ' . $nome);
        // print_r('<br>');
        // print_r('Cpf: ' . $cpf);

        $sql = "SELECT * FROM eeepcadastro WHERE nome = '$nome' and cpf = '$cpf'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION ['nome']);
            unset($_SESSION ['cpf']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['nome'] = $nome;
            $_SESSION['cpf'] = $cpf;
            header('Location: sistema.php');
        }


    }
    else
    {
        // Não Acessa Sistema
        header('Location: login.php');
    }
?>