<?php
$url = $_SERVER['REQUEST_URI'];
include 'telas/menu.php';

match ($url) {
  '/' => include 'telas/home.php',
  '/sobre' => include 'telas/sobre.php',
  '/contato' => include 'telas/contato.php',
  '/login' => include 'telas/login.php',
  default => include 'telas/404.php',
};
include 'telas/footer.php';
