<?php

function cadastro()
{
  if ($_POST) {
    $arquivo = fopen("/app/public/telas/dados/contatos.csv", "a+");
    fwrite($arquivo, "{$_POST["nome"]},{$_POST["email"]},{$_POST["telefone"]}" . PHP_EOL);
    fclose($arquivo);
    $mensagem = "Cadastro Realizado Com Sucesso!";
    include "/app/public/telas/mensagem.php";
  } else {
    include "/app/public/telas/cadastro.php";
  }
}

function login()
{
  include "/app/public/telas/login.php";
}

function home()
{
  include "/app/public/telas/home.php";
}

function listar()
{
  $contatos = file('/app/public/telas/dados/contatos.csv');
  include "/app/public/telas/listar.php";
}

function naoEncontrado()
{
  include "/app/public/telas/404.php";
}
