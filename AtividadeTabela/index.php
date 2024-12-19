<?php

include_once("data.php");
include_once("utils.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 500px;
    }

    table td,
    table th {
      padding: .5rem;
      border: 1px solid black;
      margin: -1;
    }

    table td:not(:last-child),
    table th:not(:last-child) {
      border-right: 0;
    }

    table th {
      background-color: purple;
      color: white;
    }
  </style>
</head>
<body>
  <table cellspacing="0">
    <tr>
      <th>Elemento</th>
      <th>Dia da semana</th>
      <th>Descrição</th>
      <th>Preço</th>
    </tr>
    <?php
      foreach ($pratos as $index => $value)
      {
        echo "<tr>";
        echo "<td>" . $index . "</td>";
        echo "<td>" . getWeekday($index) . "</td>";
        echo "<td>" . $value["descricao"] . "</td>";
        echo "<td>" . "R$ " . $value["preco"] . "</td>";
        echo "</tr>";
      }
    ?>
  </table>
  <p>
    <?php
      echo "Hoje é: <strong>" . getWeekday($diaAtual) . "</strong>";
    ?>
  </p>
  <p>
    <?php
      echo "Nossa sugestão para hoje é: <strong>" . $pratos[$diaAtual]["descricao"] . "</strong>";
    ?>
  </p>
  <p>
    <?php
      echo "Preço: <strong>R$ " . $pratos[$diaAtual]["preco"] . "</strong>";
    ?>
  </p>
</body>
</html>