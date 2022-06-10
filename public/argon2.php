<?php

declare(strict_types=1);

$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2ID);

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
