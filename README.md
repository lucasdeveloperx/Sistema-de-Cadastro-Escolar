# Sistema de Cadastro Escolar

Este é um projeto desenvolvido para um amigo que precisa de um sistema de cadastro para um trabalho escolar. O sistema foi construído utilizando a linguagem PHP, HTML e CSS, com integração ao banco de dados MySQL.

## Funcionalidades

- Cadastro de alunos
- Sistema de login

## Requisitos

- Servidor local (XAMPP, WAMP, MAMP, etc.)
- MySQL Workbench ou similar para gerenciamento do banco de dados
- Conexão com o banco de dados configurada corretamente no arquivo `config.php`

## Configuração do Banco de Dados

Antes de utilizar o sistema, certifique-se de configurar corretamente o banco de dados MySQL:

1. Abra o MySQL Workbench ou outra ferramenta de gerenciamento de banco de dados.
2. Crie um novo banco de dados.
3. Crie tabelas e categorias nelas e coloque no codigo.
4. No arquivo `config.php`, insira as informações de conexão com o banco de dados:

```php
<?php

    $dbHost = 'Seu_IP';
    $dbUsername = 'Seu_Usuario';
    $dbPassword = 'Sua_Senha';
    $dbName = 'Nome_Database';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   // if($conexao->connect_errno)
   // {
   //     echo "SE FUDEU";
   // }
   // else
   // {
   //     echo "Conexão efetuada com sucesso";
   // }

   
?>
