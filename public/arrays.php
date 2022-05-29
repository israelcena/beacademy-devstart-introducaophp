<?php
echo "<h1>Arrays</h1> <br/>";

$frutas = [
  "laranja",
  "abacaxi",
  "melancia",
];

$frutas[] = "banana";
$frutas[10] = "uva";
$frutas[] = "manga";
$frutas[7] = "Tamarindo";

echo "<pre>";
print_r($frutas);
echo "</pre>";
echo count($frutas);

echo "<br/>";
echo "<h2>Lista de Frutas</h2>";
echo "<ul>";
for ($i = 0; $i <= 11; $i++) {
  echo "<li>$frutas[$i]</li>";
}
echo "</ul>";

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
