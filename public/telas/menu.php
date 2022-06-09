<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container pt-5" style="background-color: #EFEFEF;">
  <nav class="m-3">
    <ul class="nav nav-tabs">
      <li class="nav-item"><a href="/" <?php
                                        $active = "class=\"nav-link active\" aria-current=\"page\"";
                                        $noactive = "class=\"nav-link\"";
                                        echo ($_SERVER['REQUEST_URI'] == "/") ? $active : $noactive;
                                        ?>>Home</a></li>
      <li class="nav-item"><a href="/listar" <?php
                                              $active = "class=\"nav-link active\" aria-current=\"page\"";
                                              $noactive = "class=\"nav-link\"";
                                              echo ($_SERVER['REQUEST_URI'] == "/listar") ? $active : $noactive;
                                              ?>>Listar</a></li>
      <li class="nav-item"><a href="/cadastro" <?php
                                                $active = "class=\"nav-link active\" aria-current=\"page\"";
                                                $noactive = "class=\"nav-link\"";
                                                echo ($_SERVER['REQUEST_URI'] == "/cadastro") ? $active : $noactive;
                                                ?>>Cadastro</a></li>
      <li class="nav-item"><a href="/login" <?php
                                            $active = "class=\"nav-link active\" aria-current=\"page\"";
                                            $noactive = "class=\"nav-link\"";
                                            echo ($_SERVER['REQUEST_URI'] == "/login") ? $active : $noactive;
                                            ?>>Login</a></li>
    </ul>
  </nav>