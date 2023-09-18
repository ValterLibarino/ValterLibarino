<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha']))

    if(strlen($_POST['email']) == 0)
    {
        echo "Preencha seu email";
    }

    else if(strlen($_POST['senha']) == 0)
    {   
        echo "Preencha sua senha";
    }

    else
    {
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução no código SQL" . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1)
        {
            $usuarios = $sql_query->fetch_assoc();

            if(!isset($_SESSION))
            {
                session_start();
            }
        }

        else
        {
            echo "Falha ao logar! Email ou senha incorretos";
        }

        $_SESSION['id'] = $usuarios['id'];
        $_SESSION['nome'] = $usuarios['nome'];

        header("location: painel.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email" id="" placeholder="Email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" id="" placeholder="Senha">
        </p>
            <button type="submit">Entrar</button>
        <p>


    </form>
    
</body>
</html>