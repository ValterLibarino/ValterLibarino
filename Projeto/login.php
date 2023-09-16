<?php
  require_once('config.php');

  if(isset($_GET['submit']))
  {
  $Email = $_GET['Email'];
  $Senha = $_GET['Senha'];
  }

  if(isset( $Email)) if(isset( $Senha)){
  $conn = "INSERT INTO usuarios(Email.Senha)
  values($Email, $Senha)";
  $result = mysqli_query($conexao, $conn);
  }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css"
</head>

<body>
  <div class="container">
    <div class="login-box">
      <h2>Login</h2>
      <form action="atividade" method="GET">
        <input type="text" name="Email" placeholder= "Email">
        <input type="password" name="Senha" placeholder= "Email">
      <input type="submit" name= "Cadastrar" value=  "Cadastrar>
      </form>
    </div>
  </div>
</body>
</html>
