<?php

declare(strict_types=1);

$nome = "alessandro";
$sobrenome = "FEITOSA";

$nome2 = "cHIQUI da silva";

$fullname = $nome . " " . $sobrenome;

echo ucwords(strtolower($nome2));
echo "<br/>";
echo ucwords(strtolower($fullname));

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
