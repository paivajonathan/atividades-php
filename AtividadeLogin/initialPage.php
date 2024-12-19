<?php
  session_start();

  // Caso clicado no 'voltar' do navegador e usuário não existir mais
  if (!isset($_SESSION["user"])) {
    header("location: index.php");
  }

  // Caso clicado no botão de sair
  if (isset($_POST["sair"])) {
    echo "<script>alert('Saindo...')</script>";
    session_destroy();
    header("location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
</head>
<body>
  <h1>Olá <?php echo $_SESSION["user"] . "!" ?></h1>
  <form method="POST">
    <input type="submit" name="sair" value="Sair">
  </form>
</body>
</html>