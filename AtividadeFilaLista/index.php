<?php

session_start();

if (isset($_POST["btn"]) && isset($_POST["entrada"]))
{
  $acao = $_POST["btn"];
  $entrada = $_POST["entrada"];

  if (!isset($_SESSION["db"]))
  {
    $_SESSION["db"] = array();
  }

  if ($acao === "adicionar")
  {
    array_push($_SESSION["db"], $entrada);
  }
  else
  {
    array_shift($_SESSION["db"]);
  }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade Fila</title>
</head>
<body>
  <h1>Estruturas de Dados 2</h1>
  <form method="post">
    <input type="text" name="entrada"> <input type="submit" value="adicionar" name="btn">  <input type="submit" value="subtrair" name="btn">
  </form>
  <hr>
  <?php print_r($_SESSION["db"] ?? array()) ?>
</body>
</html>