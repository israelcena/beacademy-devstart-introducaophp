<?php

declare(strict_types=1);
$notasCursoA = [10, 9.2, 7.5, 5];
$notasCursoB = [10, 8.2, 10.5, 7.1];
// function mediaDeNotas(array $notas): float
// {
//   $total = 0;
//   $quantidade = 0;

//   foreach ($notas as $nota) {
//     $total += $nota;
//     $quantidade++;
//   };

//   return $total / $quantidade;
// }

function mediaDeNotas(array $notas): float
{
  $total = array_sum($notas);
  $quantidade = count($notas);
  return $total / $quantidade;
}


echo mediaDeNotas($notasCursoA);
echo "<br>";
echo mediaDeNotas($notasCursoB);
