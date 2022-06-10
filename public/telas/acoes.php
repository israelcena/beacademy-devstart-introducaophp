<?php

function cadastro()
{
  include "/app/public/telas/cadastro.php";
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
