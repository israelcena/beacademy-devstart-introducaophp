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

function excluir()
{
  $localFile = '/app/public/telas/dados/contatos.csv';
  $contatos = file($localFile);

  unset($contatos[$_GET['id']]);

  unlink($localFile);

  $arquivo = fopen($localFile, 'a+');

  foreach ($contatos as $contato) {
    fwrite($arquivo, $contato);
  }
  fclose($arquivo);

  $mensagem = "Contato Excluido com Sucesso!";
  include "/app/public/telas/mensagem.php";
}

function editar()
{
  $localFile = '/app/public/telas/dados/contatos.csv';
  $contatos = file($localFile);
  $dados = explode(",", $contatos[$_GET['id']]);
  include "/app/public/telas/editar.php";
  
  if ($_POST) {
    $contatos[$_GET['id']] = "{$_POST["nome"]},{$_POST["email"]},{$_POST["telefone"]}" . PHP_EOL;

    unlink($localFile);
    $arquivo = fopen($localFile, 'a+');
    foreach ($contatos as $contato) {
      fwrite($arquivo, $contato);
    }
    fclose($arquivo);

    $mensagem = "Cadastro Editado Com Sucesso!";
    include "/app/public/telas/mensagem.php";
  }
  
}
