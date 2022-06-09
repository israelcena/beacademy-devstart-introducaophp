<?php
$url = $_SERVER['REQUEST_URI'];
include '/app/public/telas/menu.php';

echo $url;

match ($url) {
  '/index' => include '/app/public/telas/home.php',
  '/sobre' => include '/app/public/telas/sobre.php',
  '/contato' => include '/app/public/telas/contato.php',
  '/login' => include '/app/public/telas/login.php',
  default => include '/app/public/telas/404.php',
};
include 'telas/footer.php';
