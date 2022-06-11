<?php
$url = explode("?", $_SERVER['REQUEST_URI']);
include '/app/public/telas/menu.php';
include "./telas/acoes.php";

match ($url[0]) {
  '/' => include home(),
  '/login' => include login(),
  '/listar' => include listar(),
  '/cadastro' => include cadastro(),
  '/excluir' => include excluir(),
  '/editar' => include editar(),
  default => include naoEncontrado(),
};
include 'telas/footer.php';
