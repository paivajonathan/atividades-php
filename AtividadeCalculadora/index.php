<?php
  function calculate($num1, $num2, $operation) {
    switch ($operation) {
      case "add":
        return $num1 + $num2;
      case "sub":
        return $num1 - $num2;
      case "mul":
        return $num1 * $num2;
      case "div":
        return $num1 / $num2;
      default:
        return 0;
    }  
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
  <style>
    * {
      margin: 0;
    }

    main {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: linear-gradient(to right top, purple, blue);
      color: white;
      font-family: Arial;
      gap: 1rem;
    }

    main fieldset {
      width: 300px;
      display: flex;
      justify-content: center;
      border: 1px solid white;
      border-radius: 10px;
    }

    main fieldset legend {
      font-size: 20px;
    }

    main fieldset table td {
      text-align: center;
    }
  </style>
</head>
<body>
  <main>
    <fieldset>
      <legend>Calculadora</legend>
      <form method="POST">
        <table cellspacing="10">
          <tr>
            <td>
              <label for="num1">1° Número</label>
            </td>
            <td>
              <input type="number" name="num1">
            </td>
          </tr>
          <tr>
            <td>
              <label for="num2">2° Número</label>
            </td>
            <td>
              <input type="number" name="num2">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <select name="operation">
                <option value="add">Somar</option>
                <option value="sub">Subtrair</option>
                <option value="mul">Multiplicar</option>
                <option value="div">Dividir</option>
              </select>
              <input type="submit" value="Calcular">
            </td>
          </tr>
        </table>
      </form>
    </fieldset>
    <fieldset>
      <legend>Resultado</legend>
      <?php
      if (
        isset($_POST["num1"]) &&
        isset($_POST["num2"]) &&
        isset($_POST["operation"])
      ) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];

        try {
          echo calculate($num1, $num2, $operation);
        } catch (DivisionByZeroError $e) {
          echo "Número 2 não pode ser zero ao dividir.";
        } catch (Exception $e) {
          echo "Um erro inesperado ocorreu";
        }
      } else {
        echo "O resultado aparecerá aqui";
      }
      ?>
    </fieldset>
  </main>
</body>
</html>