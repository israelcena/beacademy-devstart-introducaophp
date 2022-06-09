<?php

declare(strict_types=1);

function mostrarNomes(array $nomes): void
{
  foreach ($nomes as $nome) {
    echo "Nome: " . $nome . "</br>";
  }
};

mostrarNomes(["Israel", "Sara", "Loren"]);

echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
