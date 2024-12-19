<?php
  session_start();

  function getTotal()
  {
    $sum = 0;
    $languages = ["pyt", "jav", "php", "cpp"];
    
    foreach ($languages as $language)
    {
      $sum += $_SESSION[$language] ?? 0;
    }
    
    return $sum;
  }

  function getPercentage($language)
  {
    $current = $_SESSION[$language] ?? 0;
    $total = getTotal();

    try
    {
      $result = "" . round(($current / $total) * 100, 2) . "%"; 
      return $result;
    }
    catch (DivisionByZeroError $e)
    {
      return "0%";
    }
  }

  if (isset($_POST["language"]))
  {
    $language = $_POST["language"];
    
    if (array_key_exists($language, $_SESSION))
    {
      $_SESSION[$language]++;
    } 
    else
    {
      $_SESSION[$language] = 0;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade de Enquete</title>
  <style>
    main {
      margin: 0 auto;
      width: 750px;
    }
    
    fieldset p {
      clear: both;
    }

    fieldset hr {
      float: left;
    }

    .center {
      text-align: center;
    }
  </style>
</head>
<body>
  <main>
    <h1 class="center">Prova Prática - Enquete</h1>
    <fieldset>
      <legend>Enquete</legend>
      <p>1. Qual a linguagem de programação que você mais gosta?</p>
      <form method="POST">
        <input type="radio" name="language" value="pyt"> Python <br>
        <input type="radio" name="language" value="php"> PHP <br>
        <input type="radio" name="language" value="jav"> Java <br>
        <input type="radio" name="language" value="cpp"> C++ <br>
        <div class="center">
          <input type="submit" value="Votar">
        </div>
      </form>
    </fieldset>
    <hr>
    <fieldset>
      <legend>Resultado</legend>
      <p>Python - <?php echo getPercentage("pyt") ?></p>
      <hr style="border-color: green; width: <?php echo getPercentage("pyt") ?>">
      <p>PHP - <?php echo getPercentage("php") ?></p>
      <hr style="border-color: blue; width: <?php echo getPercentage("php") ?>">
      <p>Java - <?php echo getPercentage("jav") ?></p>
      <hr style="border-color: red; width: <?php echo getPercentage("jav") ?>">
      <p>C++ - <?php echo getPercentage("cpp") ?></p>
      <hr style="border-color: yellow; width: <?php echo getPercentage("cpp") ?>">
    </fieldset>
    <p class="center">&copy; Sistema de Enquete - IFPI 2018</p>
    <hr>
  </main>
</body>
</html>