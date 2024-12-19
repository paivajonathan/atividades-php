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
  <a href="#fim-pagina">Ir para o fim da página</a>
  <br>

  <?php
  for ($i = 0; $i < ($_COOKIE["qtd_assinaturas"] ?? 0); $i++)
  {
    list($nome, $email, $mensagem, $data) = explode("@@@", $_COOKIE["assinaturas$i"]);
    echo "<div class='mensagem'>Assinado em $data por <a href='index.php'>$nome</a>:<br><br>$mensagem</div>";
  }
  ?>
  
  <a id="fim-pagina"></a>
</body>
</html>