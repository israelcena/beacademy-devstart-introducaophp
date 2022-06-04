<h1>Tabela</h1>
<form action="" method="post">
    <input type="text" name="nome" placeholder="Digite seu nome Completo">
    <input type="text" name="endereco" placeholder="Digite seu Endereço">
    <input type="number" name="telefone" placeholder="Digite seu Telefone">
    <button>Preencher</button>
</form>

<?php
if($_POST){
    $nome = $_POST['nome'];
    $endereço = $_POST['endereco'];
    $telefone = $_POST['telefone'];
echo "<table>
  <tr>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Telefone</th>
  </tr>
  <tr>
    <td>{$nome}</td>
    <td>{$endereço}</td>
    <td>{$telefone}</td>
  </tr>
</table>";
};

echo "<br/>";
echo "<br/>";
echo "<button onclick=\"window.location.href = './index.php';\">Voltar para Home</button>";
