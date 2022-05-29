<?php
echo "<h1>Bandas</h1>";

$bandas = [
  "Dream Theater",
  "Metallica",
  "Iron Maiden"
];

$bandas[100] = "Nirvana";

echo "<ol>";
for ($i=0; $i < count($bandas); $i++){
  echo "<li>$bandas[$i]</li>";
}
echo "</ol>";

echo "<ul>";
foreach ($bandas as $banda) {
  echo "<li>$banda</li>";
}
echo "</ul>";

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
