<?php
$mes = 3;
echo "<h1>Match</h1> <br/>";

echo match ($mes) {
  1 => "Janeiro",
  2 => "Fevereiro",
  3 => "Março",
  4 => "Abril",
  5 => "Maio",
  6 => "Junho",
  7 => "Julho",
  8 => "Agosto",
  9 => "Setembro",
  10 => "Outubro",
  11 => "Novembro",
  12 => "Dezembro",
  default => "Mês inválido"
};

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
