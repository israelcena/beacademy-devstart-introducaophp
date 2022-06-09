<?php
$url = $_SERVER['REQUEST_URI'];
include '/app/public/telas/menu.php';
include "./telas/acoes.php";

match ($url) {
  '/' => include home(),
  '/login' => include login(),
  '/listar' => include listar(),
  '/cadastro' => include cadastro(),
  default => include naoEncontrado(),
};
include 'telas/footer.php';
