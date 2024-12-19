<?php

$inteiro = 10;

$divisores = array();
for ($i = 1; $i <= 10; $i++) {
  if ($inteiro % $i == 0) {
    array_push($divisores, $i);
  }
}

echo "inteiro: $inteiro <br>";
echo implode(', ', $divisores);