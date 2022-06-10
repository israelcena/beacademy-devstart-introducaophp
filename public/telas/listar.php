<h1>Listar</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($contatos as $contato) {
      $partes = explode(",", $contato);
      echo "<tr><td scope=\"row\">{$partes[0]}</td><td scope=\"row\">{$partes[1]}</td><td scope=\"row\">{$partes[2]}</td></tr>";
    }
    ?>
  </tbody>
</table>