<?php
function getWeekday($number) {
  $weekdays = [
    'Domingo',
    'Segunda-feira',
    'Terça-feira',
    'Quarta-feira',
    'Quinta-feira',
    'Sexta-feira',
    'Sábado'
  ];

  return $weekdays[$number] ?? 'Dia inválido';
}