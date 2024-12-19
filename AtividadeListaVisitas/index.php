<?php
  if ($_POST && $_POST["btn"] === "Assinar")
  {
    if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["mensagem"]))
    {
      $nome = $_POST["nome"];
      $email = $_POST["email"];
      $mensagem = $_POST["mensagem"];
      $data = date("d/m/Y");
  
      $qtd_assinaturas = $_COOKIE["qtd_assinaturas"] ?? 0;
      setcookie("assinaturas$qtd_assinaturas", "$nome@@@$email@@@$mensagem@@@$data");
      setcookie("qtd_assinaturas", $qtd_assinaturas + 1);
      header("Location: " . $_SERVER["PHP_SELF"]);
    }
  }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livro de Visitantes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Livro de Visitantes</h1>

  <?php
    $qtd_assinaturas = $_COOKIE["qtd_assinaturas"] ?? 0;
    
    if ($qtd_assinaturas !== 0) {
      $ultima_assinatura = $qtd_assinaturas - 1;
      list($nome, $email, $mensagem, $data) = explode("@@@", $_COOKIE["assinaturas$ultima_assinatura"]);
      echo "<div class='mensagem'>Assinado em $data por <a href='lista.php'>$nome</a>:<br><br>$mensagem</div>";
    }
  ?>
  <form method="post">
    <table cellpadding="5">
      <tr>
        <td>
          <label for="nome">Nome (*):</label>
        </td>
        <td>
          <input type="text" name="nome" required>
        </td>
      </tr>
  
      <tr>
        <td>
          <label for="email">Email (*):</label>
        </td>
        <td>
          <input type="email" name="email" required>
        </td>
      </tr>
  
      <tr>
        <td>
          <label for="mensagem">Mensagem (*):</label>
        </td>
        <td>
          <textarea name="mensagem" required></textarea>
        </td>
      </tr>

      <tr>
        <td colspan="2">
          <input type="submit" value="Assinar" name="btn">
          <input type="reset" value="Limpar" name="btn">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>