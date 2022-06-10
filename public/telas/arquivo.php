<?php
$arquivo = fopen("dados/teste.csv", "a+");
fwrite($arquivo, "teste" . PHP_EOL);
fwrite($arquivo, "OUTRO teste" . PHP_EOL);
fwrite($arquivo, "novamente" . PHP_EOL);
