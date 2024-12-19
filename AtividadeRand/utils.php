<?php

function getRandomNumbers() {
  $numbers = [];

  for ($i = 0; $i < 5; $i++)
  {
    $randomNumber = rand(1, 20);
    array_push($numbers, $randomNumber);
  }

  return $numbers;
} 