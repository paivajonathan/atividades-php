<?php
  session_start();

  $adminUser = [
    "user" => "jonathan",
    "password" => "123456",
  ];

  // Caso clicado no botão de 'entrar'
  if (
    isset($_POST["user"]) &&
    isset($_POST["password"])
  ) 
  {
    $_SESSION["user"]     = $_POST["user"];
    $_SESSION["password"] = $_POST["password"];
  }

  if (
    ($_SESSION["user"]     ?? "") === $adminUser["user"] &&
    ($_SESSION["password"] ?? "") === $adminUser["password"]
  )
  {
    header("location: initialPage.php");
  }
  else
  {
    // Somente mostra uma mensagem se foi clicado no botão de 'entrar'
    if (
      isset($_POST["user"]) &&
      isset($_POST["password"])
    ) 
    {
      echo "<script>alert('Login e/ou senha incorreto(s).');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background-color: lightgray;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; 
      flex-direction: column;
    }

    #login-container {
      display: flex;
      justify-content: center;
      flex-direction: column;
      border: 1px solid rgba(0, 0, 0, .5);
      width: 300px;
      background-color: white;
    }

    #login-container h1 {
      background-color: blue;
      padding: 1rem;
      color: white;
      margin: 0;
    }

    #login-controls {
      padding: 1rem;
      display: flex;
      justify-content: center;
      flex-direction: column;
      gap: .5rem;
    }

    #login-controls label,
    #login-controls input[type="text"],
    #login-controls input[type="password"]
     {
      font-size: 17.5px;
    }
  
    #login-controls input[type="text"],
    #login-controls input[type="password"] {
      padding: .25rem .5rem;
    }

    .row {
      display: flex;
      justify-content: center;
      gap: .75rem;
      padding: 1rem;
    }

    #login-controls #reset,
    #login-controls #submit {
      padding: .25rem 1rem;
      font-size: 15px;
    }
  </style>
</head>
<body>
  <form method="POST">
    <div id="login-container">
      <h1>Login</h1>
      <div id="login-controls">
        <label for="usuario">Usuário:</label>
        <input type="text" name="user">
        <label for="password">Senha:</label>
        <input type="password" name="password">
        <div class="row">
          <input type="reset" value="Limpar" id="reset">
          <input type="submit" value="Entrar" id="submit">
        </div>
      </div>
    </div>
  </form>
</body>
</html>