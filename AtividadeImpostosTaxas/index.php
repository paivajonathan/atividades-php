<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Impostos e Taxas</title>
</head>
<body>
  <h1>Calculadora de Impostos e Taxas</h1>
  <form method="post">
    <label for="imposto">Imposto (%):</label>
    <input type="number" name="imposto">
    <br><br>
    
    <label for="taxaServico">Taxa de Serviço (%):</label>
    <input type="number" name="taxaServico">
    <br><br>
    
    <label for="precoCombustivel">Preço do Combustível (R$):</label>
    <input type="number" name="precoCombustivel">
    <br><br>

    <input type="submit" value="Calcular">
    <br><br>
  </form>
  <?php
  if (
    isset($_POST["imposto"]) &&
    isset($_POST["taxaServico"]) &&
    isset($_POST["precoCombustivel"])
  )
  {
    $taxaImposto = $_POST["imposto"];
    $taxaServico = $_POST["taxaServico"];
    $precoCombustivel = $_POST["precoCombustivel"];
  
    $imposto = $precoCombustivel * ($taxaImposto / 100);
    $servico = $precoCombustivel * ($taxaServico / 100);
    $total = $precoCombustivel + $servico + $imposto;

    echo "Imposto: $imposto <br>";
    echo "Taxa de Serviço: $servico <br>";
    echo "Total: $total <br>";
  }
  ?>
</body>
</html>