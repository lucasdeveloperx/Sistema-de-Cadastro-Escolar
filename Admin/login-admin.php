
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login EEEP</title>
      <!-- GOOGLE FONTS -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin/stylelogin1.css">
</head>
<body>
    
    <div>
        <h1>Admin</h1>
        <form action="test-login.php" method="POST">
            <input type="text" name="nome" id="nome" placeholder="Nome" required>
            <input type="text" name="cpf" id="cpf" placeholder="CPF" required>
            <br><br>
            <input class="enviar" type="submit" name="submit" value="Enviar">
        </form>
    </div>

</body>
</html>