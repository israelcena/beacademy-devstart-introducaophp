<!-- bootstrap Css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php
$p1 = [
  'nome' => 'Caneta',
  'preco' => 1.75,
  'quantidade' => 10
];

$p2 = [
  'nome' => 'Borracha',
  'preco' => 2.00,
  'quantidade' => 3
];

$p3 = [
  'nome' => 'Lápis',
  'preco' => 1.50,
  'quantidade' => 15,
  'image' => 'https://images.unsplash.com/photo-1595584354232-f07d525d87c1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1374&q=80'
];

$p4 = [
  'nome' => 'Celular',
  'preco' => 1500.00,
  'quantidade' => 2,
  'image' => 'https://images.unsplash.com/photo-1622782914767-404fb9ab3f57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=928&q=80'
];

$produtos = [$p1, $p2, $p3, $p4];
?>

<div class="container">
  <table class="table table-hover pure-table-striped mt-5" border="1">
    <thead class="table-dark">
      <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Imagem</th>
      </tr>
    </thead>
    <tbody>
      <?php
      foreach ($produtos as $produto) {
        echo "<tr>
              <td>{$produto['nome']}</td>
              <td>R$ {$produto['preco']}</td>
              <td>{$produto['quantidade']}</td>
              <td>";
        echo "<img style=\" width:100px; \" class=\"x-auto d-block rounded img-fluid img-thumbnail\" src=\"{$produto['image']} \" alt=\"Descrição do {$produto['nome']}\" />";
        echo  "</td>
            </tr>";
      }
      ?>
    </tbody>
  </table>
</div>

<?php
echo "<br/>";
echo "<br/>";
echo "<center><button class=\"btn btn-primary\" onclick=\"window.location.href = './index.php';\">Voltar para Home</button></center>";