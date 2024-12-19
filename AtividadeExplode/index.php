<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade Explode</title>
</head>
<body>
  <form method="POST">
    <label for="numbers">Entre com uma lista de números separados por vírgula:</label>
    <input type="text" name="numbers" pattern="^\d+(,\d+)*$">
    <input type="submit" value="Somar">
  </form>
  <p>
    <?php
      if (isset($_POST["numbers"]))
      {
        $numbers = $_POST["numbers"];
        $numbersArray = explode(",", $numbers);
        
        $sum = 0;

        foreach ($numbersArray as $number)
        {
          $sum += $number;
        }
        
        echo $sum;
      }
      else
      {
        echo "A soma aparecerá aqui.";
      }
    ?>
  </p>
</body>
</html>