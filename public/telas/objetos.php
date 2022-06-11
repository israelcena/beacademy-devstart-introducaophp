<?php

declare(strick_type=1);

$i = new stdClass;
$i->nome = "teste";

// echo ($i->nome);

function somar(int $a1, int $a2)
{
  echo $a1 + $a2;
}

somar(2, 1);
