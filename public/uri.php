<?php

$url = $_SERVER['REQUEST_URI'];

echo match ($url) {
  "página inicial" => "/",
  "página de contato" => "/contato",
  "página de sobre" => "/sobre",
  "página de match" => "/match",
  default => "página não encontrada"
};


echo "<br/>";
echo "<hr/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";