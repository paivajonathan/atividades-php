<?php
  require_once("utils.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      min-height: 100vh;
      overflow: hidden;
      background: linear-gradient(to right top, #D3EE98, #A0D683, #72BF78);
    }

    .center {
      text-align: center;
    }

    #game-container {
      border: 1px solid black;
      padding: 2.5rem;
      width: 350px;
      border-radius: 10px;
      background-color: white;
      border: none;
    }

    #game-container h1 {
      text-align: center;
    }

    #game-container input[type="submit"] {
      margin-top: 1rem;
      padding: 1rem;
      background-color: #0a0;
      color: white;
      border: none;
      border-radius: 10px;
      width: 100%;
    }

    #game-container fieldset {
      margin-top: 1rem;
    }
  </style>
</head>
<body>
  <div id="game-container">
    <h1>Jogo do Acerto</h1>
    <form method="POST">
      <div class="center">
        <label for="number">Digite um número entre 1 e 20</label>
        <input type="number" min="1" max="20" name="number" autofocus required> <br>
        <input type="submit" value="Verificar">
      </div>
    </form>
    <fieldset>
      <legend>Resultado</legend>
      <?php
        if (isset($_POST["number"]))
        {
          $number = $_POST["number"];
          $randomNumbers = getRandomNumbers();
          
          if (in_array($number, $randomNumbers)) 
          {
            echo "<p style='color: #0a0'>VOCÊ ACERTOU!</p>";
          }
          else
          {
            echo "<p style='color: #a00'>Tente novamente...</p>";
          }
          
          echo "Número digitado: $number<br>";
          echo "Números sorteados: " . implode(", ", $randomNumbers);
        }
        else
        {
          echo "O resultado aparecerá aqui";
        }
      ?>
    </fieldset>
  </div>
</body>
</html>