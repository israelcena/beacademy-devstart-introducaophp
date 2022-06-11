<h1>Listar</h1>
<table class="table table-hover table-striped">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($contatos as $i => $contato) {
      $partes = explode(",", $contato);
      echo "<tr><td scope=\"row\">{$partes[0]}</td><td scope=\"row\">{$partes[1]}</td><td scope=\"row\">{$partes[2]}</td><td scope=\"row\"><a class=\"btn btn-danger btn-sm\" href=\"/excluir?id={$i}\">Excluir<a></td></tr>";
    }
    ?>
  </tbody>
</table>