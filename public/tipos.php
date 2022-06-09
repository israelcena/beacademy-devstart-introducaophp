<?php

declare(strict_types=1);

function somar(int $a1, int $a2)
{
  return $a1 + $a2;
};

function welcome(string $nome)
{
  return "Bem Vindo {$nome}";
};

echo somar(3, 5);
echo "<br/>";
echo welcome('israel');

echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
