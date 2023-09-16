<?php
     require_once('config.php');

     if(isset($_GET['submit']))
     {
     $Email = $_GET['Email'];
     $Senha = $_GET['Senha'];
     $Confirme = $_GET['Confirme'];
     }

     if(isset( $Email)) if(isset( $Senha)) if(isset( $Confirme))
     {
     $conn = "INSERT INTO usuarios(Email.Senha,Confirme)
     values($Email, $Senha, $Confirmarsenha)";
     $result = mysqli_query($conexao, $conn);
     }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"
</head>

<style>
  h2 {
    margin-left: 265px;
  }

  p {
    margin-left: 220px;
  }
</style>

<body>
  <div class="container">
    <div class="login-box">
      <h2>Cadastro</h2>
      <form action="atividade" method="GET">
        <input type="text" name="Email" placeholder= "Email">
        <input type="password" name="Senha" placeholderame= "Senha" id= "Senha">
        <input type="password" name="Confirme" placeholder= "Confirme">
        <input type="submit"name="Cadastrar" value= "Cadastrar"> 
      </form>
      <p>já tem uma conta? <a href="login.php">Criar conta</a></p>
    </div>
  </div>
</body>
</html>
