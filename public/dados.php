<?php

$a1 = [
  "nome" => "João",
  "idade" => 20,
  "altura" => 1.80,
  "peso" => 80,
];

$a2 = [
  "nome" => "Maria",
  "idade" => 25,
  "altura" => 1.65,
  "peso" => 60,
];

$alunos = [$a1, $a2];

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="container">
  <h1 class="mt-5 h1">Alunos</h1>
  <hr>
  <table class="table table-hover pure-table-striped mt-5" border="1">
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Altura</th>
        <th>Peso</th>
      </tr>
    </thead>
    <?php
    foreach ($alunos as $aluno) {
      echo
      "<tr>
      <td>{$aluno["nome"]}</td>
      <td>{$aluno["idade"]} anos</td>
      <td>{$aluno["altura"]} m</td>
      <td>{$aluno["peso"]} kg</td>
    </tr>";
    };
    ?>
  </table>
</div>
<?php
echo "<br/>";
echo "<br/>";
echo "<center><button class=\"btn btn-primary\" onclick=\"window.location.href = './index.php';\">Voltar para Home</button></center>";